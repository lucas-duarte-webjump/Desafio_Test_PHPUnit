<?php

namespace APP\Exception\Services;

use APP\Exception\Errors\InvalidFildException;
use APP\Exception\Model\User;

class AuthenticatedUser {
    public function login(User $user, $password) {
        if ($user->authenticated($password)) {
            $val = "";

            for( $i=0; $i<100; $i++ ) {
                $val .= chr(rand(ord('A'), ord('Z')));
            }

            echo "token: " . $val;
            return;
        }

        

        throw new InvalidFildException('login password', $password);
    }
}