<?php

namespace App\DataFixtures;

use App\Entity\Patient;
use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PatientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $patient = new Patient();
        $patient->setFirstName("Jad");
        $patient->setLastName("Daouk");
        $patient->setBirthDate(DateTime::createFromFormat('Y-m-d', "2001-02-19"));
        $patient->setBloodType("B");
        $patient->setSocialSecurityNumber("123456");

        $user = new User();

        $user->setPassword('$2y$10\$mBysVD3ACbCV6HyJQW/qSuC2IzgF34lsNsFXwC4keSvOGH.s1EKsK');
        $user->setLogin('jad.daouk');
        $user->setRoles(['ROLE_PATIENT']);

        $patient->setUser($user);

        $manager->persist($user);
        $manager->persist($patient);

        $patient = new Patient();
        $patient->setFirstName("Grégoire");
        $patient->setLastName("Hage");
        $patient->setBirthDate(DateTime::createFromFormat('Y-m-d', "2001-04-15"));
        $patient->setBloodType("A");
        $patient->setSocialSecurityNumber("12345678");

        $user = new User();

        $user->setPassword('$2y$10\$mBysVD3ACbCV6HyJQW/qSuC2IzgF34lsNsFXwC4keSvOGH.s1EKsK');
        $user->setLogin('greg.patient');
        $user->setRoles(['ROLE_PATIENT']);

        $patient->setUser($user);

        $manager->persist($user);
        $manager->persist($patient);

        $manager->flush();
    }
}
