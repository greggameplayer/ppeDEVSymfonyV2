<?php


namespace App\DataFixtures;


use App\Entity\Doctor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DoctorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $doctor = new Doctor();
        $doctor->setLastName('Marit');
        $doctor->setFirstName('Victor');

        $manager->persist($doctor);

        $manager->flush();
    }
}
