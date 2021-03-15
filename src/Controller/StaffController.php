<?php
namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\Staff;
use App\Entity\User;
use App\Form\DoctorType;
use App\Form\SecretaryType;
use App\Form\StaffType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class StaffController extends AbstractController
{
    /**
     * @Route("/admin/GestionPersonnel", name="homepageStaff")
     * @param Request $request
     * @return Response
     */
    public function homepageStaff(Request $request, PaginatorInterface $paginator)
    {
        if(isset($_GET['search'])){
            $donnees  = $this->getDoctrine()->getRepository(Staff::class)->findStaffs($_GET['search']);
        }
        else {
            $donnees  = $this->getDoctrine()->getRepository(Staff::class)->findBy([], ['id'=>'desc']);
        }
        $staff = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),
            10
        );
        return $this->render('admin/homepageAdmin.html.twig', [
            'staffs' => $staff
        ]);
    }

    /**
     * @Route("/admin/createStaffMember", name="createNewStaffMember")
     * @param Request $request
     * @return Response
     */
    public function createNewStaffMember(Request $request, UserPasswordEncoderInterface $passwordEncoder):Response
    {
        $staff = new Staff;
        $user = new User;
        $form =  $this->createForm(StaffType::class, $staff);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $staff,
                    $form->get('user')->get('password')->getData()
                )
            );
            $user->setLogin($form->get('user')->get('login')->getData());
            $user->setRoles($form->get('user')->get('roles')->getData());
            $staff->setUser($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->persist($staff);
            $em->flush();


            return $this->redirectToRoute('homepageStaff');
        }

        return $this->render('admin/staff/addStaff.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/createDoctor", name="createDoctor")
     * @param Request $request
     * @return Response
     */
    public function createDoctor(Request $request):Response
    {
        $form =  $this->createForm(DoctorType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();


            return $this->redirectToRoute('homepageStaff');
        }

        return $this->render('admin/doctor/addDoctor.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/createSecretary", name="createSecretary")
     * @param Request $request
     * @return Response
     */
    public function createSecretary(Request $request, UserPasswordEncoderInterface $passwordEncoder):Response
    {
        $user = new User();
        $user->setRoles(['ROLE_SECRETARY']);
        $form =  $this->createForm(SecretaryType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $user = $form->getData();
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


            return $this->redirectToRoute('homepageStaff');
        }

        return $this->render('admin/secretary/addSecretary.html.twig', [
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/user/supprimerStaffMember/{id}", name="delStaff")
     * @param Request $request
     * @return Response
     */
    public function delStaff($id):Response
    {
        $staff = $this->getDoctrine()->getRepository(Staff::class)->findOneBy(['id' => $id]);
        $em = $this->getDoctrine()->getManager();
        $em->remove($staff->getUser());
        $em->remove($staff);
        $em->flush();

        return $this->redirectToRoute('homepagePatient');
    }

    /**
     * @Route("/admin/modifierStaffMember/{id}", name="updateStaff")
     * @param Request $request
     * @return Response
     */
    public function updateStaff(Request $request, $id, UserPasswordEncoderInterface $passwordEncoder):Response
    {
        $staff = $this->getDoctrine()->getRepository(Staff::class)->findOneBy(['id' => $id]);
        $user = new User;
        $form =  $this->createForm(StaffType::class, $staff);
        $form->handleRequest($request);

        if($form->isSubmitted()&& $form->isValid()){
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $staff,
                    $form->get('user')->get('password')->getData()
                )
            );
            $user->setLogin($form->get('user')->get('login')->getData());
            $user->setRoles($form->get('user')->get('roles')->getData());
            $staff->setUser($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($staff);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('homepagePatient');
        }

        return $this->render('admin/staff/addStaff.html.twig', [
            "form" => $form->createView()
        ]);
    }
}
