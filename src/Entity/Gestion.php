<?php

namespace App\Entity;

use App\Repository\GestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GestionRepository::class)
 */
class Gestion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $Marches;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Maitres_ouvrages;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Projets;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Montant;

    /**
     * @ORM\Column(type="date")
     */
    private $Debut_projet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contrat;

    /**
     * @ORM\Column(type="date", length=255)
     */
    private $Duree_projet;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_de_fin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarches(): ?string
    {
        return $this->Marches;
    }

    public function setMarches(string $Marches): self
    {
        $this->Marches = $Marches;

        return $this;
    }

    public function getMaitresOuvrages(): ?string
    {
        return $this->Maitres_ouvrages;
    }

    public function setMaitresOuvrages(string $Maitres_ouvrages): self
    {
        $this->Maitres_ouvrages = $Maitres_ouvrages;

        return $this;
    }

    public function getProjets(): ?string
    {
        return $this->Projets;
    }

    public function setProjets(string $Projets): self
    {
        $this->Projets = $Projets;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->Montant;
    }

    public function setMontant(string $Montant): self
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getDebutProjet(): ?\DateTimeInterface
    {
        return $this->Debut_projet;
    }

    public function setDebutProjet(\DateTimeInterface $Debut_projet): self
    {
        $this->Debut_projet = $Debut_projet;

        return $this;
    }

    public function getContrat(): ?string
    {
        return $this->Contrat;
    }

    public function setContrat(string $Contrat): self
    {
        $this->Contrat = $Contrat;

        return $this;
    }

    public function getDureeProjet(): ?\DateTimeInterface
    {
        return $this->Duree_projet;
    }

    public function setDureeProjet(\DateTimeInterface $Duree_projet): self
    {
        $this->Duree_projet = $Duree_projet;

        return $this;
    }

    public function getDateDeFin(): ?\DateTimeInterface
    {
        return $this->Date_de_fin;
    }

    public function setDateDeFin(\DateTimeInterface $Date_de_fin): self
    {
        $this->Date_de_fin = $Date_de_fin;

        return $this;
    }
}
