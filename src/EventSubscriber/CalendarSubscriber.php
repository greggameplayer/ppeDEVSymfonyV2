<?php

namespace App\EventSubscriber;

use App\Entity\Meeting;
use App\Entity\Status;
use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use DateInterval;
use DateTime;
use DateTimeInterface;
use DateTimeZone;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class CalendarSubscriber implements EventSubscriberInterface
{
    protected $em;

    function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    public static function getSubscribedEvents(): array
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
        $filters = $calendar->getFilters();

        switch ($filters['calendar-id']) {
            case 'patient-calendar':
                $this->fillPatientCalendar($calendar, $start, $end, $filters);
                break;
            case 'secretary-calendar':
                $this->fillSecretaryCalendar($calendar, $start, $end, $filters);
                break;
        }
    }

    public function fillPatientCalendar(CalendarEvent $calendar, DateTimeInterface $start, DateTimeInterface $end, array $filters)
    {
        date_default_timezone_set('Europe/Paris');
        $events = $this->em->getRepository(Meeting::class)->findByBetweenDatesUnavailableEvents($start, $end);

        foreach ($events as $event) {
            $calendar->addEvent(new Event(
                'Indisponible',
                $event->getDate()->modify('-30 minutes'),
                $event->getDate()->modify('+30 minutes'),
                [
                    'editable' => false,
                    'dropable' => false,
                    'rendering' => 'background',
                    'backgroundColor' => '#d9534f',
                    'borderColor' => '#d9534f',
                    'overlap' => false,
                    'display' => 'background'
                ]
            ));
        }

        $events = $this->em->getRepository(Meeting::class)->findByUserBetweenDatesEvents($start, $end);

        foreach ($events as $event) {
            $color = ''; $deletable = false;

            switch ($event->getStatus()->getName()) {
                case 'Annulé':
                    $color = '#5309be';
                    break;
                case 'Réalisé':
                    $color = '#11ff00';
                    break;
                case 'Confirmé':
                    $deletable = true;
                    $color = '#ff6f00';
                    break;
                case 'Refusé':
                    $color = '#ff0000';
                    break;
                case 'Demandé':
                    $deletable = true;
                    $color = '#ecba26';
                    break;
            }

            $calendar->addEvent(new Event(
                'Rendez-vous avec M. ' . $event->getDoctor()->getLastName(),
                $event->getDate()->modify('-30 minutes'),
                $event->getDate()->modify('+30 minutes'),
                [
                    'backgroundColor' => $color,
                    'borderColor' => $color,
                    'extendedProps' => [
                        'isHTML' => true,
                        'deletable' => $deletable,
                        'status' => $event->getStatus()->getName()
                    ]
                ]
            ));
        }
    }

    public function fillSecretaryCalendar(CalendarEvent $calendar, DateTimeInterface $start, DateTimeInterface $end, array $filters)
    {
        date_default_timezone_set('Europe/Paris');
        $events = $this->em->getRepository(Meeting::class)->findByBetweenDatesEvents($start, $end);

        foreach ($events as $event) {
            $title = 'Rendez-vous de M. ' . $event->getPatient()->getLastName() . ' avec le docteur ' . $event->getDoctor()->getLastName();

            $color = ''; $html = '';

            switch ($event->getStatus()->getName()) {
                case 'Annulé':
                    $html = '<div style="display: flex; flex-direction: row;" class="mt-auto mb-1"><i class="fas fa-2x fa-calendar-minus delete ml-1"></i></div>';
                    $color = '#5309be';
                    break;
                case 'Réalisé':
                    $color = '#11ff00';
                    break;
                case 'Confirmé':
                    $html = '<div style="display: flex; flex-direction: row;" class="mt-auto mb-1"><i class="fas fa-2x fa-calendar-check realized mr-2 ml-1"></i><i class="fas fa-2x fa-calendar-times notRealized"></i></div>';
                    $color = '#ff6f00';
                    break;
                case 'Refusé':
                    $html = '<div style="display: flex; flex-direction: row;" class="mt-auto mb-1"><i class="fas fa-2x fa-calendar-minus delete redDelete ml-1"></i></div>';
                    $color = '#ff0000';
                    break;
                case 'Demandé':
                    $html = '<div style="display: flex; flex-direction: row;" class="mt-auto mb-1"><i class="fas fa-2x fa-calendar-check validate mr-2 ml-1"></i><i class="fas fa-2x fa-calendar-times refuse"></i></div>';
                    $color = '#ecba26';
                    break;
            }
            $calendar->addEvent(new Event(
                $title,
                $event->getDate()->modify('-30 minutes'),
                $event->getDate()->modify('+30 minutes'),
                [
                    'extendedProps' => [
                        'isHTML' => true,
                        'html' => $html,
                        'eventStatus' => $event->getStatus()->getName()
                    ],
                    'backgroundColor' => $color,
                    'borderColor' => $color
                ]
            ));
        }
    }
}
