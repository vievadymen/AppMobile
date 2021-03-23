<?php

namespace App\Entity;

use App\Repository\DepotRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepotRepository::class)
 */
class Depot
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
    private $cniEmetteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomEmetteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomEmetteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telEmetteur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frais;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $total;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomBeneficiaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenomBeneficiaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telBeneficiaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCniEmetteur(): ?string
    {
        return $this->cniEmetteur;
    }

    public function setCniEmetteur(string $cniEmetteur): self
    {
        $this->cniEmetteur = $cniEmetteur;

        return $this;
    }

    public function getNomEmetteur(): ?string
    {
        return $this->nomEmetteur;
    }

    public function setNomEmetteur(string $nomEmetteur): self
    {
        $this->nomEmetteur = $nomEmetteur;

        return $this;
    }

    public function getPrenomEmetteur(): ?string
    {
        return $this->prenomEmetteur;
    }

    public function setPrenomEmetteur(string $prenomEmetteur): self
    {
        $this->prenomEmetteur = $prenomEmetteur;

        return $this;
    }

    public function getTelEmetteur(): ?string
    {
        return $this->telEmetteur;
    }

    public function setTelEmetteur(string $telEmetteur): self
    {
        $this->telEmetteur = $telEmetteur;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getFrais(): ?string
    {
        return $this->frais;
    }

    public function setFrais(string $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(string $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getNomBeneficiaire(): ?string
    {
        return $this->nomBeneficiaire;
    }

    public function setNomBeneficiaire(string $nomBeneficiaire): self
    {
        $this->nomBeneficiaire = $nomBeneficiaire;

        return $this;
    }

    public function getPrenomBeneficiaire(): ?string
    {
        return $this->prenomBeneficiaire;
    }

    public function setPrenomBeneficiaire(string $prenomBeneficiaire): self
    {
        $this->prenomBeneficiaire = $prenomBeneficiaire;

        return $this;
    }

    public function getTelBeneficiaire(): ?string
    {
        return $this->telBeneficiaire;
    }

    public function setTelBeneficiaire(string $telBeneficiaire): self
    {
        $this->telBeneficiaire = $telBeneficiaire;

        return $this;
    }
}
