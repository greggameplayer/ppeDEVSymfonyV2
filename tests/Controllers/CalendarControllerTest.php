<?php


namespace App\tests;


use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalendarControllerTest extends WebTestCase
{
    public function testPatientIndex()
    {
        $client = SecurityControllerTest::getPatientClient();
        $client->request('GET', '/patient');
        $this->assertResponseStatusCodeSame(200);
    }

    public function testSecretaryIndex()
    {
        $client = SecurityControllerTest::getSecretaryClient();
        $client->request('GET', '/secretary');
        $this->assertResponseStatusCodeSame(200);
    }

    public function testCreateEvent()
    {
        $client = SecurityControllerTest::getPatientClient();
        $client->request('POST', '/patient/event', ['date' => DateTime::createFromFormat('Y-m-d H:i:s','2021-03-03 10:00:00')]);
        $this->assertResponseStatusCodeSame(200);
        $this->assertPageTitleSame('Prendre rendez-vous');
    }
}
