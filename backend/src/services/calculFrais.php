<?php 
namespace App\services;

use App\Repository\TabFraisRepository;
use ProxyManager\ProxyGenerator\ValueHolder\MethodGenerator\Constructor;

Class calculFrais {

    private $rep;
    private $fraisMontant;
    public function __construct( TabFraisRepository $rep)
    {
        $this->rep = $rep;
    }

    public function Calculfrais($montant){

        $frais = $this->rep->findAll();
        
        foreach ($frais as  $value) {
            if ($montant >= $value->getMin() && $montant< $value->getMax() ){

                $this->fraisMontant = $value->getFrais();

                if ($this->fraisMontant == 0.02) {
                    
                    $this->fraisMontant = $montant * 0.02;
                }

            }

        }
        return $this->fraisMontant;
        

    }
}