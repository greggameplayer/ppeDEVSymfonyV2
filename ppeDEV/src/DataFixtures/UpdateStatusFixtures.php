<?php


namespace App\DataFixtures;


use App\Entity\Meeting;
use App\Entity\Staff;
use App\Entity\UpdateStatus;
use App\Entity\Patient;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class UpdateStatusFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $updateStatus = new UpdateStatus();
        $updateStatus->setAction('Demandé');
        $updateStatus->setDateUpdate(DateTime::createFromFormat("Y-m-d H:i:s", "2020-12-07 10:00:00"));
        $updateStatus->setStaff($manager->getRepository(Staff::class)->findOneBy(['firstName' => 'Grégoire']));
        $updateStatus->setMeeting($manager->getRepository(Meeting::class)->findOneBy(['patient' => $manager->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => '123456'])]));

        $manager->persist($updateStatus);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            StaffFixtures::class,
            MeetingFixtures::class
        );
    }
}
