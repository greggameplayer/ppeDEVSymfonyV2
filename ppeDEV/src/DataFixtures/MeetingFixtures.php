<?php


namespace App\DataFixtures;


use App\Entity\Doctor;
use App\Entity\Meeting;
use App\Entity\Status;
use App\Entity\Patient;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MeetingFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $meeting = new Meeting();
        $meeting->setDate(DateTime::createFromFormat("Y-m-d H:i:s", "2021-03-07 10:00:00"));
        $meeting->setDoctor($manager->getRepository(Doctor::class)->findOneBy(['firstName' => 'Victor']));
        $meeting->setPatient($manager->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => '123456']));
        $meeting->setStatus($manager->getRepository(Status::class)->findOneBy(['name' => 'Demandé']));

        $manager->persist($meeting);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            DoctorFixtures::class,
            PatientFixtures::class,
            StatusFixtures::class
        );
    }
}
