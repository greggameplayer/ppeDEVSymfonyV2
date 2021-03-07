<?php

namespace App\DataFixtures;

use App\Entity\Patient;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SecretaryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $user = new User();

        $user->setPassword('$2y$10\$mBysVD3ACbCV6HyJQW/qSuC2IzgF34lsNsFXwC4keSvOGH.s1EKsK');
        $user->setLogin('clement.demarchi');
        $user->setRoles(['ROLE_SECRETARY']);

        $manager->persist($user);
        $manager->flush();
    }
}
