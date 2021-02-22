<?php


namespace App\Tests\Repository;


use App\Entity\Doctor;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DoctorRepositoryTest extends KernelTestCase
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

    public function testSearchByFirstName()
    {
        /** @var Doctor $doctor */
        $doctor = $this->entityManager->getRepository(Doctor::class)->findOneBy(['firstName' => 'Victor']);
        $this->assertSame('Victor', $doctor->getFirstName());
        $this->assertNotSame('Grégoire', $doctor->getFirstName());
    }

    public function testSearchByLastName()
    {
        /** @var Doctor $doctor */
        $doctor = $this->entityManager->getRepository(Doctor::class)->findOneBy(['lastName' => 'Marit']);
        $this->assertSame('Marit', $doctor->getLastName());
        $this->assertNotSame('Hage', $doctor->getLastName());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
