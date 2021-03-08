<?php


namespace App\tests;


use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SubscribeControllerTest extends WebTestCase
{
    public function testCheckSocialSecurityNumber()
    {
        $client = static::createClient();
        $client->request('GET', '/verificationNuméroSecuriteSociale');
        $this->assertResponseStatusCodeSame(200);
    }

    public function testPatientRegistration()
    {
        $client = static::createClient();
        $client->request('GET', '/inscriptionPatient?socialNumber=fsdnfoisdnoifs');
        $this->assertResponseStatusCodeSame(200);
    }

}