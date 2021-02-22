<?php


namespace App\Tests\Repository;


use App\Entity\Status;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StatusRepositoryTest extends KernelTestCase
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

    public function testSearchByName()
    {
        /** @var Status $status */
        $status = $this->entityManager->getRepository(Status::class)->findOneBy(['name' => 'Demandé']);

        $this->assertSame('Demandé', $status->getName());
        $this->assertNotSame('Confirmé', $status->getName());
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        // doing this is recommended to avoid memory leaks
        $this->entityManager->close();
        $this->entityManager = null;
    }
}
