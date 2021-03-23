<?php

namespace App\Entity;

use App\Repository\CommissionsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommissionsRepository::class)
 */
class Commissions
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

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
    private $part_dep;

    /**
     * @ORM\Column(type="float")
     */
    private $part_ret;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPartDep(): ?float
    {
        return $this->part_dep;
    }

    public function setPartDep(float $part_dep): self
    {
        $this->part_dep = $part_dep;

        return $this;
    }

    public function getPartRet(): ?float
    {
        return $this->part_ret;
    }

    public function setPartRet(float $part_ret): self
    {
        $this->part_ret = $part_ret;

        return $this;
    }
}
