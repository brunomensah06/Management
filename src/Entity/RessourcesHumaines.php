<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RessourcesHumainesRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;
Use Symfony\Component\HttpFoundation\File\File;
Use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=RessourcesHumainesRepository::class)
 * @vich\Uploadable
 */
class RessourcesHumaines
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
    private $Prenoms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Email;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Diplome;

    /**
     * @ORM\Column(type="date")
     */
    private $Date_de_naissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Lieu_de_naissance;

    /**
     * @ORM\Column(type="integer")
     */
    private $CNI;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="RH_image", fileNameProperty="filename")
     * 
     * @var File|null
     */
    private $imageFile;
     /**
     * @var File|null    
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $filename;


    /**
     * @ORM\Column(type="string", nullable=true)
     *
     * @var string|null
     */
    private $imageName;
    /**
     * @ORM\Column(type="Datetime", nullable=true)
     *
     * @var \DateTimeInterface|null
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Statut_dans_l_entreprise;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $situation_matrimoniale;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type_de_contrat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $IPRES;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $CSS;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Declaration_fiscale;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Impots;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenoms(): ?string
    {
        return $this->Prenoms;
    }

    public function setPrenoms(string $Prenoms): self
    {
        $this->Prenoms = $Prenoms;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->Matricule;
    }

    public function setMatricule(string $Matricule): self
    {
        $this->Matricule = $Matricule;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getDiplome(): ?string
    {
        return $this->Diplome;
    }

    public function setDiplome(?string $Diplome): self
    {
        $this->Diplome = $Diplome;

        return $this;
    }

    public function getDateDeNaissance(): ?\DateTimeInterface
    {
        return $this->Date_de_naissance;
    }

    public function setDateDeNaissance(\DateTimeInterface $Date_de_naissance): self
    {
        $this->Date_de_naissance = $Date_de_naissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->Lieu_de_naissance;
    }

    public function setLieuDeNaissance(string $Lieu_de_naissance): self
    {
        $this->Lieu_de_naissance = $Lieu_de_naissance;

        return $this;
    }

    public function getCNI(): ?int
    {
        return $this->CNI;
    }

    public function setCNI(int $CNI): self
    {
        $this->CNI = $CNI;

        return $this;
    }


    public function getStatutDansLEntreprise(): ?string
    {
        return $this->Statut_dans_l_entreprise;
    }

    public function setStatutDansLEntreprise(string $Statut_dans_l_entreprise): self
    {
        $this->Statut_dans_l_entreprise = $Statut_dans_l_entreprise;

        return $this;
    }

    public function getSituationMatrimoniale(): ?string
    {
        return $this->situation_matrimoniale;
    }

    public function setSituationMatrimoniale(string $situation_matrimoniale): self
    {
        $this->situation_matrimoniale = $situation_matrimoniale;

        return $this;
    }

    public function getTypeDeContrat(): ?string
    {
        return $this->type_de_contrat;
    }

    public function setTypeDeContrat(string $type_de_contrat): self
    {
        $this->type_de_contrat = $type_de_contrat;

        return $this;
    }

    public function getIPRES(): ?float
    {
        return $this->IPRES;
    }

    public function setIPRES(?float $IPRES): self
    {
        $this->IPRES = $IPRES;

        return $this;
    }

    public function getCSS(): ?float
    {
        return $this->CSS;
    }

    public function setCSS(?float $CSS): self
    {
        $this->CSS = $CSS;

        return $this;
    }

    public function getDeclarationFiscale(): ?float
    {
        return $this->Declaration_fiscale;
    }

    public function setDeclarationFiscale(?float $Declaration_fiscale): self
    {
        $this->Declaration_fiscale = $Declaration_fiscale;

        return $this;
    }

    public function getImpots(): ?float
    {
        return $this->Impots;
    }

    public function setImpots(?float $Impots): self
    {
        $this->Impots = $Impots;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(?string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
  /**
 * @param File|null $imageFile
 * @return Ressource
 * @throws Exception
 */
public function setImageFile(?File $imageFile=null): RessourcesHumaines
{
    $this->imageFile = $imageFile;
    if ($this->imageFile instanceof UploadedFile) {
        $this->updated_at = new \DateTime('now');
    }
    return $this;
}


    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): void
    {
        $this->imageName = $imageName;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }
    public function getUpdatedAt(): ?DateTimeInterface
{
    return $this->updated_at;
}

public function setUpdatedAt(DateTimeInterface $updated_at): self
{
    $this->updated_at = $updated_at;

    return $this;
}
/**
 * @return string|null
 */
public function getFilename(): ?string
{
    return $this->filename;
}

/**
 * @param string|null $filename
 * @return Ressource
 */
public function setFilename(?string $filename): RessourcesHumaines
{
    $this->filename = $filename;

    return $this;
}

}
