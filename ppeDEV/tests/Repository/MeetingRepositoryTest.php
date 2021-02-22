<?php


namespace App\Tests\Repository;


use App\Entity\Doctor;
use App\Entity\Meeting;
use App\Entity\Patient;
use DateTime;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class MeetingRepositoryTest extends KernelTestCase
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    protected function setUp(): void
    {
        $kernel = self::bootKernel();

        $this->entityManager = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testSearchByDate()
    {
        /** @var Meeting $meeting */
        $meeting = $this->entityManager->getRepository(Meeting::class)->findOneBy(['date' => DateTime::createFromFormat("Y-m-d H:i:s", "2021-03-07 10:00:00")]);

        $this->assertSame($this->entityManager->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => '123456']), $meeting->getPatient());
        $this->assertSame($this->entityManager->getRepository(Doctor::class)->findOneBy(['firstName' => 'Victor']), $meeting->getDoctor());
    }

    public function testSearchByPatient()
    {
        /** @var Meeting $meeting */
        $meeting = $this->entityManager->getRepository(Meeting::class)->findOneBy(['patient' => $this->entityManager->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => '123456'])]);

        $this->assertEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2021-03-07 10:00:00"), $meeting->getDate());
        $this->assertSame($this->entityManager->getRepository(Doctor::class)->findOneBy(['firstName' => 'Victor']), $meeting->getDoctor());
    }

    public function testSearchByDoctor()
    {
        /** @var Meeting $meeting */
        $meeting = $this->entityManager->getRepository(Meeting::class)->findOneBy(['doctor' => $this->entityManager->getRepository(Doctor::class)->findOneBy(['firstName' => 'Victor'])]);

        $this->assertSame($this->entityManager->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => '123456']), $meeting->getPatient());
        $this->assertEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2021-03-07 10:00:00"), $meeting->getDate());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
