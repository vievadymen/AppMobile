<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TransactionRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 */
class Transaction
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
    private $code;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="transactions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="transactionDepot")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userDepot;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="transactionRetrait")
     */
    private $userRetrait;

    /**
     * @ORM\Column(type="float")
     */
    private $part_etat;

    /**
     * @ORM\Column(type="float")
     */
    private $part_ent;

    /**
     * @ORM\Column(type="float")
     */
    private $part_agence_dep;

    /**
     * @ORM\Column(type="float")
     */
    private $part_agence_ret;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getUserDepot(): ?User
    {
        return $this->userDepot;
    }

    public function setUserDepot(?User $userDepot): self
    {
        $this->userDepot = $userDepot;

        return $this;
    }

    public function getUserRetrait(): ?User
    {
        return $this->userRetrait;
    }

    public function setUserRetrait(?User $userRetrait): self
    {
        $this->userRetrait = $userRetrait;

        return $this;
    }

    public function getPartEtat(): ?float
    {
        return $this->part_etat;
    }

    public function setPartEtat(float $part_etat): self
    {
        $this->part_etat = $part_etat;

        return $this;
    }

    public function getPartEnt(): ?float
    {
        return $this->part_ent;
    }

    public function setPartEnt(float $part_ent): self
    {
        $this->part_ent = $part_ent;

        return $this;
    }

    public function getPartAgenceDep(): ?float
    {
        return $this->part_agence_dep;
    }

    public function setPartAgenceDep(float $part_agence_dep): self
    {
        $this->part_agence_dep = $part_agence_dep;

        return $this;
    }

    public function getPartAgenceRet(): ?float
    {
        return $this->part_agence_ret;
    }

    public function setPartAgenceRet(float $part_agence_ret): self
    {
        $this->part_agence_ret = $part_agence_ret;

        return $this;
    }
}
