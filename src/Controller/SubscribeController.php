<?php

namespace App\Controller;

use App\Entity\Patient;
use App\Entity\User;
use App\Form\PatientRegistrationType;
use App\Form\SocialSecurityNumberType;
use App\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class SubscribeController extends AbstractController
{

    private $guardHandler;
    private $authenticator;

    public function __construct(LoginFormAuthenticator $authenticator, GuardAuthenticatorHandler $guardHandler){
        $this->guardHandler = $guardHandler;
        $this->authenticator = $authenticator;
    }

    /**
     * @Route("/verificationNuméroSecuriteSociale", name="checkSocialSecurityNumber")
     * @param Request $request
     * @return Response
     */
    public function checkSocialSecurityNumber(Request $request):Response
    {
        $patient = new Patient();
        $form =  $this->createForm(SocialSecurityNumberType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $patient = $this->getDoctrine()->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => $form->get("socialNumber")->getData()]);
            if($patient){
                $patientIsAnUser = $patient->getUser();
                if($patientIsAnUser){
                    return $this->redirectToRoute('app_login', [
                        "socialNumber" => true
                    ]);
                }

                else{
                    return $this->redirectToRoute('patientRegistration', [
                        "socialNumber" =>$form->get("socialNumber")->getData()
                    ]);
                }
            }
            else{
                return $this->redirectToRoute('patientRegistration', [
                    "socialNumber" =>$form->get("socialNumber")->getData()
                ]);
            }
        }

        return $this->render('patientRegistration/checkSocialSecurityNumber.html.twig', [
            "form" => $form->createView()
        ]);
    }


    /**
     * @Route("/inscriptionPatient", name="patientRegistration")
     * @param Request $request
     * @return Response
     */
    public function patientRegistration(Request $request, UserPasswordEncoderInterface $passwordEncoder):Response
    {

        $socialNumber = $request->get("socialNumber");
        $patient = $this->getDoctrine()->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => $socialNumber]);;
        $user = new User;
        $controller = new PatientController();

        if($patient===null){
            $patient=new Patient();
            $patient->setSocialSecurityNumber($socialNumber);
        }
        $patient->setUser($user);
        $patient->getUser()->setRoles(["ROLE_PATIENT"]);


        $form =  $this->createForm(PatientRegistrationType::class, $patient);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){

            if($patient->getSocialSecurityNumber() == $socialNumber){

                $email = $this->getDoctrine()->getRepository(User::class)->findOneBy(['login' => $form->get('user')->get('login')->getData()]);

                if($email!==null){
                    return $this->render('patientRegistration/checkSocialSecurityNumber.html.twig', [
                        "form" => $form->createView(),
                        "errorEmail"=> true
                    ]);
                }

                $password = $passwordEncoder->encodePassword(
                    $patient->getUser(),
                    $form->get('user')->get('password')->getData()
                );


                $patient->getUser()->setPassword($password);
                $patient->getUser()->setLogin($form->get('user')->get('login')->getData());




                $em = $this->getDoctrine()->getManager();
                $em->persist($patient);
                $em->persist($patient->getUser());
                $em->flush();

                return $this->redirectToRoute("app_login", [
                    "email" => $patient->getUser()->getLogin(),
                    "accountCreated" => true
                ]);
            }
            else{
                return $this->render('patientRegistration/checkSocialSecurityNumber.html.twig', [
                    "form" => $form->createView(),
                    "error"
                ]);

            }

        }

        return $this->render('patientRegistration/checkSocialSecurityNumber.html.twig', [
            "form" => $form->createView()
        ]);
    }
}