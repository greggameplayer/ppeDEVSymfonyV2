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

        switch($filters['calendar-id']) {
            case 'patient-calendar':
                $this->fillPatientCalendar($calendar, $start, $end, $filters);
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
            $calendar->addEvent(new Event(
                'Rendez-vous avec M. ' . $event->getDoctor()->getLastName(),
                $event->getDate()->modify('-30 minutes'),
                $event->getDate()->modify('+30 minutes')
            ));
        }
    }
}
