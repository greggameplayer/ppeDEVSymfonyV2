<?php


namespace App\DataFixtures;


use App\Entity\Status;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StatusFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $status = new Status();
        $status->setName('Demandé');

        $manager->persist($status);

        $status = new Status();
        $status->setName('Confirmé');

        $manager->persist($status);

        $status = new Status();
        $status->setName('Annulé');

        $manager->persist($status);

        $status = new Status();
        $status->setName('Refusé');

        $manager->persist($status);

        $status = new Status();
        $status->setName('Réalisé');

        $manager->persist($status);

        $status = new Status();
        $status->setName('Inactif');

        $manager->persist($status);

        $manager->flush();
    }
}
