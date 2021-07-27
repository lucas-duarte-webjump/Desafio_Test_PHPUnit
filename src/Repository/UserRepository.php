<?php

namespace APP\Exception\Repository;

use APP\Exception\Interfaces\IUserRepository;
use APP\Exception\Model\User;

class UserRepository implements IUserRepository
{
    private array $user;

    public function create(User $user): array
    {   
        $formatUserDate = [['id' => $user->getId()] => [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword()
        ]];

        return $this->user[] = $formatUserDate;
    }
    
    
    
    public function find(): array
    {  
        return $this->user;
    }

   
}