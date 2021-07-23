<?php

namespace APP\Exception\Model;

use APP\Exception\Services\VerifyFilds;

class User extends VerifyFilds{
    private string $name;
    private string $email;
    private string $password;

    public function __construct(string $name, string $email, string $password) {
        $this->verifyName($name);
        $this->name = $name;
        $this->verifyEmail($email);
        $this->email = $email;
        $this->verifyPass($password);
        $this->password = $password;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

  
}