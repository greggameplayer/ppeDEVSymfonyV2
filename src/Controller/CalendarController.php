<?php


namespace App\Controller;


use App\Entity\Doctor;
use App\Entity\Meeting;
use App\Entity\Patient;
use App\Entity\Status;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendarController extends AbstractController
{
    /**
     * @Route("/patient", name="patientIndex")
     * @param Request $request
     * @return Response
     */
    public function patientIndex(Request $request): Response
    {
        return $this->render('patient/index.html.twig', ['route' => "patientIndex"]);
    }

    /**
     * @Route("/patient/event", name="createEvent", methods={"POST"})
     * @param Request $request
     * @return Response
     */
    public function createEvent(Request $request): Response
    {
        return $this->render('patient/eventForm.html.twig', ['date' => $request->get('date'), 'route' => "patientIndex"]);
    }

    /**
     * @Route("/patient/event", name="deleteEvent", methods={"PATCH"})
     * @param Request $request
     * @return Response
     */
    public function deleteEvent(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $patient = $this->getDoctrine()->getRepository(Patient::class)->findOneBy(['user' => $this->getUser()]);
        $cancelledStatus = $this->getDoctrine()->getRepository(Status::class)->findOneBy(['name' => 'Annulé']);
        $meeting = $this->getDoctrine()->getRepository(Meeting::class)->findOneBy(['date' => DateTime::createFromFormat('Y-m-d H:i:s', json_decode($request->getContent())->date), 'patient' => $patient]);
        $meeting->setStatus($cancelledStatus);
        $em->persist($meeting);
        $em->flush();

        if ($meeting->getStatus() == $cancelledStatus) {
            return $this->json([]);
        } else {
            return $this->json([], 500);
        }
    }

    /**
     * @Route("/secretary", name="secretaryIndex")
     * @param Request $request
     * @return Response
     */
    public function secretaryIndex(Request $request): Response
    {
        return $this->render('secretary/index.html.twig', ['route' => "secretaryIndex", 'doctors' => $this->getDoctrine()->getRepository(Doctor::class)->findAll()]);
    }

    /**
     * @Route("/secretary/event", name="modifyEventStatus", methods={"PATCH"})
     * @param Request $request
     * @return Response
     */
    public function modifyEventStatus(Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $this->getDoctrine()->getRepository(Meeting::class)->findOneByDateWithoutInactive(json_decode($request->getContent())->date);

        $meeting->setStatus($this->getDoctrine()->getRepository(Status::class)->findOneBy(['id' => json_decode($request->getContent())->status]));

        $em->persist($meeting);
        $em->flush();

        if ($meeting->getStatus()->getId() == json_decode($request->getContent())->status) {
            return $this->json([]);
        } else {
            return $this->json(['message' => 'le status demandé n\'existe pas'], 400);
        }


    }
}
