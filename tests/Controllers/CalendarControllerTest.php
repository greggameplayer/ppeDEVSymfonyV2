<?php


namespace App\tests;


use DateTime;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalendarControllerTest extends WebTestCase
{
    public function testPatientIndex()
    {
        $client = SecurityControllerTest::getUserClient();
        $client->request('GET', '/patient');
        $this->assertResponseStatusCodeSame(200);
    }

    public function testCreateEvent()
    {
        $client = SecurityControllerTest::getUserClient();
        $client->request('POST', '/patient/event', ['date' => new DateTime('2021-03-03 10:00:00')]);
        $this->assertResponseStatusCodeSame(200);
        $this->assertPageTitleSame('Prendre rendez-vous');
    }
}
