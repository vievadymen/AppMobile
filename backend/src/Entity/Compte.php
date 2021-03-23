<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource(
 * routePrefix="/admin",
 * attributes={"security"="is_granted('ROLE_AdminSystem')"},
 * collectionOperations={
 * "get",
 * "post"
 * },
 * itemOperations={
 * "get"={},
 * "bloquer_compte"={
 *      "method"= "PUT",
 *       "path"="/comptes/{id}/bloquer",
 *        "controller"= App\Controller\ArchivageUser::class}
 * },
 * )
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
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
     * @ORM\Column(type="datetime")
     *  @Assert\NotBlank
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $achivage;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="compte")
     */
    private $user;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank
     * @Assert\Range(min=700000, minMessage="Le solde doit être supérieur ou égale à 700000 F CFA")
     */
    private $solde;

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getAchivage(): ?bool
    {
        return $this->achivage;
    }

    public function setAchivage(bool $achivage): self
    {
        $this->achivage = $achivage;

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

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}
