<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Compte;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CompteFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for ($i=1; $i <10 ; $i++) { 
            $compte = new Compte();
            $compte -> setCode("1236-ERRT")
                    -> setSolde("1.500.565 frcfa")
                    -> setCreatedAt($faker->dateTime())
                    -> setAchivage(false);
    
                    $manager->persist($compte);
        }
       
                $manager->flush();

    }
}