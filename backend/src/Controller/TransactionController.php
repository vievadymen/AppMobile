<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\services\calculFrais;
use App\Repository\TabFraisRepository;
use Doctrine\Persistence\ObjectManager;
use Lcobucci\JWT\Signer\Hmac;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class TransactionController extends AbstractController
{
    private $frais;
    

    public function __construct( calculFrais $frais)
    {
        $this->frais = $frais;
    }

    /**
     * @Route("/api/admin/transaction/depot",methods={"POST"})
     */
    public function depot(Request $request, TokenStorageInterface $token, ObjectManager $manager)
    {
       $data = json_decode($request->getContent(), true); 
       $user = $token->getToken()->getUser();

       
       //$agence = $user->getAgence();
      
        dd($user);
        $trans= new Transaction();

        $trans->setCode($code)
              ->setType($type)
              ->setDate($date)
              ->setClient($client)
              ->setUserDepot($user)
              ->setMontant($montant);
              $manager->persist($trans);
              
      // return $this->json("merci");
    }
    //$manager->flush();
   
}
