<?php
namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;
use App\Entity\Compte;
use ApiPlatform\Core\DataPersister\DataPersisterInterface;


class CompteDataPersister implements ContextAwareDataPersisterInterface
{

  private $decorated;


    public function __construct(DataPersisterInterface $decorated)
    {
      $this->decorated = $decorated;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Compte;
    }

    public function persist($data, array $context = [])
    {
      // call your persistence layer to save $data
      
        $result = $this->decorated->persist($data, $context);
        return $data;

    }

    public function remove($data, array $context = [])
    {
      // call your persistence layer to delete $data
    }
}