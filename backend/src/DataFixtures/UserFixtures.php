<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Profil;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Caissier;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $encoder) {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
    
            $faker = Factory::create('fr_FR');
            $profils =["AdminSystem","AdminAgent" ,"Caissier" ,"Utilisateur"];
            foreach ($profils as $key => $libelle) {
                $profil = new Profil();
                $profil->setLibelle($libelle);
                $manager->persist($profil);
                $manager->flush();
                
                $user = new User();
                $user->setProfil($profil);
                $user->setPrenom($faker->firstname);
                $user->setNom($faker->name);
                $user->setTel($faker->phoneNumber);
                $user->setEmail($faker->email);
                $user->setCni(21454);
                $user->setUsername($faker->userName);
                $user->setArchived(0);
    
                //Génération des Users
                $password = $this->encoder->encodePassword($user, 'pass_1234');
                $user->setPassword($password);
    
                $manager->persist($user);
            }
        
            $manager->flush();
    }
}
