<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChapitreRepository")
 */
class Chapitre
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resume;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $intriguePrincipale;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $intrigureSecondaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $characterRevel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projets", inversedBy="chapitres")
     */
    private $projet;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Personnages", inversedBy="chapitres")
     */
    private $personnages;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateContexte;

    public function __construct()
    {
        $this->personnages = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(?string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getIntriguePrincipale(): ?string
    {
        return $this->intriguePrincipale;
    }

    public function setIntriguePrincipale(?string $intriguePrincipale): self
    {
        $this->intriguePrincipale = $intriguePrincipale;

        return $this;
    }

    public function getIntrigureSecondaire(): ?string
    {
        return $this->intrigureSecondaire;
    }

    public function setIntrigureSecondaire(?string $intrigureSecondaire): self
    {
        $this->intrigureSecondaire = $intrigureSecondaire;

        return $this;
    }

    public function getCharacterRevel(): ?string
    {
        return $this->characterRevel;
    }

    public function setCharacterRevel(?string $characterRevel): self
    {
        $this->characterRevel = $characterRevel;

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

    /**
     * @return Collection|Personnages[]
     */
    public function getPersonnages(): Collection
    {
        return $this->personnages;
    }

    public function addPersonnage(Personnages $personnage): self
    {
        if (!$this->personnages->contains($personnage)) {
            $this->personnages[] = $personnage;
            $personnage->setChapitre($this);
        }

        return $this;
    }

    public function removePersonnage(Personnages $personnage): self
    {
        if ($this->personnages->contains($personnage)) {
            $this->personnages->removeElement($personnage);
        }

        return $this;
    }

    public function getDateContexte(): ?string
    {
        return $this->dateContexte;
    }

    public function setDateContexte(?string $dateContexte): self
    {
        $this->dateContexte = $dateContexte;

        return $this;
    }
}
