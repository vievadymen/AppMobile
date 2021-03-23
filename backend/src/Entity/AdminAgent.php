<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AdminAgentRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ApiResource()
 * @ORM\Entity(repositoryClass=AdminAgentRepository::class)
 */
class AdminAgent extends User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
