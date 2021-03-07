<?php

namespace App\tests;

use App\Repository\PatientRepository;
use App\Repository\StaffRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    public static function getAdminClient(){
        $client = static::createClient();
        $userRepository = static::$container->get(StaffRepository::class);
        $testUser = $userRepository->findOneBy(["firstName" => 'Victor']);
        $client->loginUser($testUser->getUser());
        return $client;
    }
    public static function getUserClient(){
        $client = static::createClient();
        $userRepository = static::$container->get(StaffRepository::class);
        $testUser = $userRepository->findOneBy(["firstName" => 'Grégoire']);
        $client->loginUser($testUser->getUser());
        return $client;
    }
    public static function getPatientClient(){
        $client = static::createClient();
        $userRepository = static::$container->get(PatientRepository::class);
        $testUser = $userRepository->findOneBy(["socialSecurityNumber" => '123456']);
        $client->loginUser($testUser->getUser());
        return $client;
    }
    public static function getSecretaryClient(){
        $client = static::createClient();
        $userRepository = static::$container->get(UserRepository::class);
        $testUser = $userRepository->findOneBy(["login" => 'clement.demarchi']);
        $client->loginUser($testUser);
        return $client;
    }

    //Test fonctionnel Route /
    public function testGetConnectionPage(){
        $client = static::createClient();
        $client->request('GET', '/');
        $this->assertResponseStatusCodeSame(200);
    }

    //Test fonctionnel Route /logout
    public function testLogoutRole_Admin(){
        $client = $this->getAdminClient();
        $client->request('GET', '/logout');
        $this->assertResponseStatusCodeSame(302);
    }
    public function testLogoutRole_User(){
        $client = $this->getUserClient();
        $client->request('GET', '/logout');
        $this->assertResponseStatusCodeSame(302);
    }
    public function testLogoutWithOutConnection(){
        $client = static::createClient();
        $client->request('GET', '/logout');
        $this->assertResponseStatusCodeSame(302);
    }
}
