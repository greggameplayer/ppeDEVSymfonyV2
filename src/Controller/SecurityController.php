<?php

namespace App\Controller;

use App\Entity\LogUser;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    public static function saveLogConnect($user, $em)
    {
        $staffId = $user->getId();
        $currentDate = new DateTime(date("Y-m-d H:i:s"));
        $action = "connexion";

        $log = new LogUser;
        $log->setDate($currentDate);
        $log->setAction($action);
        $log->setStaffId($staffId);

        $em->persist($log);
        $em->flush();
    }

    /**
     * @Route("/", name="app_login")
     */
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            if (in_array(["ROLE_USER", "ROLE_ADMIN"], $this->getUser()->getRoles())) {
                return $this->redirectToRoute('homepagePatient');
            } elseif (in_array("ROLE_SECRETARY", $this->getUser()->getRoles())) {
                return $this->redirectToRoute('secretaryIndex');
            } elseif (in_array("ROLE_PATIENT", $this->getUser()->getRoles())) {
                return $this->redirectToRoute('patientIndex');
            }
        }


        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
                'last_username' => $lastUsername,
                'error' => $error,
                'email' => $request->get("email"),
                "socialNumber"=>$request->get("socialNumber"),
                "accountCreated"=>$request->get("accountCreated")

            ]
        );
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
