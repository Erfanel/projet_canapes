<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $couleur = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Canape::class)]
    private Collection $canapes;

    public function __construct()
    {
        $this->canapes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCouleur(): ?string
    {
        return $this->couleur;
    }

    public function setCouleur(string $couleur): static
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * @return Collection<int, Canape>
     */
    public function getCanapes(): Collection
    {
        return $this->canapes;
    }

    public function addCanape(Canape $canape): static
    {
        if (!$this->canapes->contains($canape)) {
            $this->canapes->add($canape);
            $canape->setCategorie($this);
        }

        return $this;
    }

    public function removeCanape(Canape $canape): static
    {
        if ($this->canapes->removeElement($canape)) {
            // set the owning side to null (unless already changed)
            if ($canape->getCategorie() === $this) {
                $canape->setCategorie(null);
            }
        }

        return $this;
    }
}
