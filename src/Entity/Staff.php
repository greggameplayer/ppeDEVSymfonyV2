<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=StaffRepository::class)
 */
class Staff implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=UpdateStatus::class, mappedBy="staff")
     */
    private $updateStatuses;

    public function __construct()
    {
        $this->updateStatuses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        /** @var $user User */
        $user = $this->user;

        return (string) $user->getLogin();
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getRoles()
    {
        /** @var $user User */
        $user = $this->user;

        return $user->getRoles();
    }

    public function getPassword()
    {
        /** @var $user User */
        $user = $this->user;

        return $user->getPassword();
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|UpdateStatus[]
     */
    public function getUpdateStatuses(): Collection
    {
        return $this->updateStatuses;
    }

    public function addUpdateStatus(UpdateStatus $updateStatus): self
    {
        if (!$this->updateStatuses->contains($updateStatus)) {
            $this->updateStatuses[] = $updateStatus;
            $updateStatus->setStaff($this);
        }

        return $this;
    }

    public function removeUpdateStatus(UpdateStatus $updateStatus): self
    {
        if ($this->updateStatuses->removeElement($updateStatus)) {
            // set the owning side to null (unless already changed)
            if ($updateStatus->getStaff() === $this) {
                $updateStatus->setStaff(null);
            }
        }

        return $this;
    }
}
