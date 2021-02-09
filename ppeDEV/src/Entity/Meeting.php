<?php

namespace App\Entity;

use App\Repository\MeetingRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MeetingRepository::class)
 */
class Meeting
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=Doctor::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $doctor;

    /**
     * @ORM\ManyToOne(targetEntity=Status::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Patient::class, inversedBy="meetings")
     * @ORM\JoinColumn(nullable=false)
     */
    private $patient;

    /**
     * @ORM\OneToMany(targetEntity=UpdateStatus::class, mappedBy="meeting")
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDoctor(): ?Doctor
    {
        return $this->doctor;
    }

    public function setDoctor(?Doctor $doctor): self
    {
        $this->doctor = $doctor;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getPatient(): ?Patient
    {
        return $this->patient;
    }

    public function setPatient(?Patient $patient): self
    {
        $this->patient = $patient;

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
            $updateStatus->setMeeting($this);
        }

        return $this;
    }

    public function removeUpdateStatus(UpdateStatus $updateStatus): self
    {
        if ($this->updateStatuses->removeElement($updateStatus)) {
            // set the owning side to null (unless already changed)
            if ($updateStatus->getMeeting() === $this) {
                $updateStatus->setMeeting(null);
            }
        }

        return $this;
    }
}
