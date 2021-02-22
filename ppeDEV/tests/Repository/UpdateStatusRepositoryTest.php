<?php


namespace App\Tests\Repository;


use App\Entity\Meeting;
use App\Entity\Patient;
use App\Entity\Staff;
use App\Entity\UpdateStatus;
use DateTime;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UpdateStatusRepositoryTest extends KernelTestCase
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

    public function testSearchByAction()
    {
        /** @var UpdateStatus $updateStatus */
        $updateStatus = $this->entityManager->getRepository(UpdateStatus::class)->findOneBy(['action' => 'Demandé']);

        $this->assertEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2020-12-07 10:00:00"), $updateStatus->getDateUpdate());
        $this->assertNotEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2020-13-07 10:00:00"), $updateStatus->getDateUpdate());
    }

    public function testSearchByStaff()
    {
        /** @var UpdateStatus $updateStatus */
        $updateStatus = $this->entityManager->getRepository(UpdateStatus::class)->findOneBy(['staff' => $this->entityManager->getRepository(Staff::class)->findOneBy(['firstName' => 'Grégoire'])]);

        $this->assertEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2020-12-07 10:00:00"), $updateStatus->getDateUpdate());
        $this->assertNotEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2020-13-07 10:00:00"), $updateStatus->getDateUpdate());
    }

    public function testSearchByMeeting()
    {
        /** @var UpdateStatus $updateStatus */
        $updateStatus = $this->entityManager->getRepository(UpdateStatus::class)->findOneBy(['meeting' => $this->entityManager->getRepository(Meeting::class)->findOneBy(['patient' => $this->entityManager->getRepository(Patient::class)->findOneBy(['socialSecurityNumber' => '123456'])])]);

        $this->assertEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2020-12-07 10:00:00"), $updateStatus->getDateUpdate());
        $this->assertNotEquals(DateTime::createFromFormat("Y-m-d H:i:s", "2020-13-07 10:00:00"), $updateStatus->getDateUpdate());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
