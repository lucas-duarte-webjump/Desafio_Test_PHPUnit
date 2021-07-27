<?php

namespace APP\Exception\Model;

use APP\Exception\Interfaces\IAuthenticated;
use APP\Exception\Services\VerifyFilds;

class User extends VerifyFilds implements IAuthenticated {
    private int $id = 0;
    private string $name;
    private string $email;
    private string $password;

    public function __construct(string $name, string $email, string $password) {
        $this->id += 1;
        $this->name = $name;
        $this->email = $email;
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

    public function authenticated(string $password): bool
    {
        return $this->password === $password;
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function getId()
    {
        return $this->id;
    }
}