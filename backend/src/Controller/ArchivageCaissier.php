<?php

namespace App\Controller;

use App\Entity\Caissier;
use App\Entity\Compte;
use Doctrine\ORM\EntityManagerInterface;

class ArchivageCaissier
{
    protected $em;

    public function __construct( EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(Caissier $data)
    {
        $caissier = $data;
        $caissier->setArchived(true);
        $this->em->persist($caissier);
        $this->em->flush();
        
        return $caissier;
    }
}