<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HighconceptRepository")
 */
class Highconcept
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $protagoniste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $antagoniste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contexte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $eventStart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $stake;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Projets")
     */
    private $projet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="highconcepts")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProtagoniste(): ?string
    {
        return $this->protagoniste;
    }

    public function setProtagoniste(string $protagoniste): self
    {
        $this->protagoniste = $protagoniste;

        return $this;
    }

    public function getAntagoniste(): ?string
    {
        return $this->antagoniste;
    }

    public function setAntagoniste(string $antagoniste): self
    {
        $this->antagoniste = $antagoniste;

        return $this;
    }

    public function getContexte(): ?string
    {
        return $this->contexte;
    }

    public function setContexte(string $contexte): self
    {
        $this->contexte = $contexte;

        return $this;
    }

    public function getEventStart(): ?string
    {
        return $this->eventStart;
    }

    public function setEventStart(string $eventStart): self
    {
        $this->eventStart = $eventStart;

        return $this;
    }

    public function getStake(): ?string
    {
        return $this->stake;
    }

    public function setStake(string $stake): self
    {
        $this->stake = $stake;

        return $this;
    }

    public function getProjet(): ?Projets
    {
        return $this->projet;
    }

    public function setProjet(?Projets $projet): self
    {
        $this->projet = $projet;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
