<?php


namespace App\Controller;


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
    public function patientIndex(Request $request)
    {
        return $this->render('patient/index.html.twig');
    }
}
