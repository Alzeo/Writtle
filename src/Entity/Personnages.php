<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnagesRepository")
 */
class Personnages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Projets", inversedBy="personnages")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $genre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $residence;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $placeBorn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $poids;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $accessoires;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tenue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $croyances;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secrets;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tiqueParole;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $education;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $richesse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $qualites;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $defauts;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $addictions;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $weakness;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Chapitre", mappedBy="personnages")
     * @ORM\JoinColumn(name="projet_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $chapitres;

    public function __construct()
    {
        $this->chapitres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

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

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function setGenre(?string $genre): self
    {
        $this->genre = $genre;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getResidence(): ?string
    {
        return $this->residence;
    }

    public function setResidence(?string $residence): self
    {
        $this->residence = $residence;

        return $this;
    }

    public function getPlaceBorn(): ?string
    {
        return $this->placeBorn;
    }

    public function setPlaceBorn(?string $placeBorn): self
    {
        $this->placeBorn = $placeBorn;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(?string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(?string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAccessoires(): ?string
    {
        return $this->accessoires;
    }

    public function setAccessoires(?string $accessoires): self
    {
        $this->accessoires = $accessoires;

        return $this;
    }

    public function getTenue(): ?string
    {
        return $this->tenue;
    }

    public function setTenue(?string $tenue): self
    {
        $this->tenue = $tenue;

        return $this;
    }

    public function getCroyances(): ?string
    {
        return $this->croyances;
    }

    public function setCroyances(?string $croyances): self
    {
        $this->croyances = $croyances;

        return $this;
    }

    public function getSecrets(): ?string
    {
        return $this->secrets;
    }

    public function setSecrets(?string $secrets): self
    {
        $this->secrets = $secrets;

        return $this;
    }

    public function getTiqueParole(): ?string
    {
        return $this->tiqueParole;
    }

    public function setTiqueParole(?string $tiqueParole): self
    {
        $this->tiqueParole = $tiqueParole;

        return $this;
    }

    public function getEducation(): ?string
    {
        return $this->education;
    }

    public function setEducation(?string $education): self
    {
        $this->education = $education;

        return $this;
    }

    public function getRichesse(): ?string
    {
        return $this->richesse;
    }

    public function setRichesse(?string $richesse): self
    {
        $this->richesse = $richesse;

        return $this;
    }

    public function getQualites(): ?string
    {
        return $this->qualites;
    }

    public function setQualites(?string $qualites): self
    {
        $this->qualites = $qualites;

        return $this;
    }

    public function getDefauts(): ?string
    {
        return $this->defauts;
    }

    public function setDefauts(?string $defauts): self
    {
        $this->defauts = $defauts;

        return $this;
    }

    public function getAddictions(): ?string
    {
        return $this->addictions;
    }

    public function setAddictions(?string $addictions): self
    {
        $this->addictions = $addictions;

        return $this;
    }

    public function getWeakness(): ?string
    {
        return $this->weakness;
    }

    public function setWeakness(?string $weakness): self
    {
        $this->weakness = $weakness;

        return $this;
    }

    public function setChapitre(?Chapitre $chapitre): self
    {
        $this->chapitre = $chapitre;

        return $this;
    }

    /**
     * @return Collection|Chapitre[]
     */
    public function getChapitres(): Collection
    {
        return $this->chapitres;
    }

    public function addChapitre(Chapitre $chapitre): self
    {
        if (!$this->chapitres->contains($chapitre)) {
            $this->chapitres[] = $chapitre;
            $chapitre->addPersonnage($this);
        }

        return $this;
    }

    public function removeChapitre(Chapitre $chapitre): self
    {
        if ($this->chapitres->contains($chapitre)) {
            $this->chapitres->removeElement($chapitre);
            $chapitre->removePersonnage($this);
        }

        return $this;
    }
}
