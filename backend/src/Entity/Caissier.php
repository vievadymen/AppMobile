<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CaissierRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource(
 * routePrefix="/admin",
 * attributes={"security"="is_granted('ROLE_AdminSystem')"},
 * normalizationContext={"groups"={ "read:user"}},
 * collectionOperations={
 * "get",
 * "post"
 * },
 * itemOperations={
 * "get"={},
 * "bloquer_compte"={
 *      "method"= "PUT",
 *       "path"="/caissiers/{id}/bloquer",
 *        "controller"= App\Controller\ArchivageCaissier::class}
 * },
 * )
 * @ORM\Entity(repositoryClass=CaissierRepository::class)
 */
class Caissier extends User
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
