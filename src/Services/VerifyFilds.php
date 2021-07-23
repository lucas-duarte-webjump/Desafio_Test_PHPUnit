<?php

namespace APP\Exception\Services;

use APP\Exception\Errors\InvalidFildException;

abstract class VerifyFilds {

    protected function verifyName(string $name): void
    {   
        if(strlen($name) < 3) 
        {
            throw new InvalidFildException('name', $name);
        }
    } 

    protected function verifyEmail(string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidFildException('email', $email);
        }
    } 

    protected function verifyPass(string $password)
    {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);

        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
            throw new InvalidFildException('password', $password);
        }
    }

}