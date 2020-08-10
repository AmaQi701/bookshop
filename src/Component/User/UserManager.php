<?php declare(strict_types=1);

namespace App\Component\User;

use App\Entity\User;
use Doctrine\ORM\EntitManagerInterface;

class UserManager
{
    private EntityManagerInterface $entityManager;
    public function  __construct(
        EntityManagerInterface $entityManager
    ){
        $this->entityManager = $entityManager;
    }

    public function save(User $user, bool $isNeedFlush = false): void
    {
        $this->entityManager->persist($user);

        if ($isNeedFlush){
            $this->entityManager->flush();
        }
    }

}