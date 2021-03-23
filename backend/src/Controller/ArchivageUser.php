<?php

namespace App\Controller;

use App\Entity\Compte;
use Doctrine\ORM\EntityManagerInterface;

class ArchivageUser
{
    protected $em;

    public function __construct( EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function __invoke(Compte $data)
    {
        $compte = $data;
        $compte->setAchivage(true);
        $this->em->persist($compte);
        $this->em->flush();
        
        return $compte;
    }
}