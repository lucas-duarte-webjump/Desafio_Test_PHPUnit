<?php
namespace APP\Exception\Services;

use APP\Exception\Model\User;
use APP\Exception\Repository\UserRepository;
use APP\Exception\Services\VerifyFilds;

class UserService extends VerifyFilds
{

    private array $user;

    public function execute(string $name, string $email, string $password) 
    {
        $this->verifyEmail($email);
        $this->verifyName($name);
        $this->verifyPass($password);

        $userRepository = new UserRepository();

        $user = new User($name, $email, $password);
        
        $userRepository->create($user);

        return $this->user[] = $user;
    }


    
    public function getUser(): array
    {
        return $this->user;
    }
}