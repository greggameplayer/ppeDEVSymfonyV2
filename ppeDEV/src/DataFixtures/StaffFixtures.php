<?php

namespace App\DataFixtures;

use App\Entity\Staff;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StaffFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setLogin("Victor.Marit");
        $user->setPassword("$2y$10\$mBysVD3ACbCV6HyJQW/qSuC2IzgF34lsNsFXwC4keSvOGH.s1EKsK");
        $user->setRoles(["ROLE_ADMIN"]);
        $staff = new Staff();
        $staff->setFirstName("Victor");
        $staff->setLastName('Marit');
        $staff->setUser($user);

        $user2 = new User();
        $staff2 = new Staff();
        $staff2->setFirstName("Grégoire");
        $staff2->setLastName('Hage');
        $user2->setLogin("Grégoire.Hage");
        $user2->setPassword("$2y$10\$mBysVD3ACbCV6HyJQW/qSuC2IzgF34lsNsFXwC4keSvOGH.s1EKsK");
        $user2->setRoles([]);
        $staff2->setUser($user2);


        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($staff);
        $manager->persist($staff2);
        $manager->flush();
    }
}
