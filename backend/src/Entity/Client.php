<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="client")
     */
    private $transactions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_complet_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_complet_benef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cni_client;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cni_benef;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_client;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tel_benef;

    public function __construct()
    {
        $this->transactions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactions(): Collection
    {
        return $this->transactions;
    }

    public function addTransaction(Transaction $transaction): self
    {
        if (!$this->transactions->contains($transaction)) {
            $this->transactions[] = $transaction;
            $transaction->setClient($this);
        }

        return $this;
    }

    public function removeTransaction(Transaction $transaction): self
    {
        if ($this->transactions->removeElement($transaction)) {
            // set the owning side to null (unless already changed)
            if ($transaction->getClient() === $this) {
                $transaction->setClient(null);
            }
        }

        return $this;
    }

    public function getNomCompletClient(): ?string
    {
        return $this->nom_complet_client;
    }

    public function setNomCompletClient(string $nom_complet_client): self
    {
        $this->nom_complet_client = $nom_complet_client;

        return $this;
    }

    public function getNomCompletBenef(): ?string
    {
        return $this->nom_complet_benef;
    }

    public function setNomCompletBenef(string $nom_complet_benef): self
    {
        $this->nom_complet_benef = $nom_complet_benef;

        return $this;
    }

    public function getCniClient(): ?string
    {
        return $this->cni_client;
    }

    public function setCniClient(string $cni_client): self
    {
        $this->cni_client = $cni_client;

        return $this;
    }

    public function getCniBenef(): ?string
    {
        return $this->cni_benef;
    }

    public function setCniBenef(?string $cni_benef): self
    {
        $this->cni_benef = $cni_benef;

        return $this;
    }

    public function getTelClient(): ?string
    {
        return $this->tel_client;
    }

    public function setTelClient(string $tel_client): self
    {
        $this->tel_client = $tel_client;

        return $this;
    }

    public function getTelBenef(): ?string
    {
        return $this->tel_benef;
    }

    public function setTelBenef(string $tel_benef): self
    {
        $this->tel_benef = $tel_benef;

        return $this;
    }
}
