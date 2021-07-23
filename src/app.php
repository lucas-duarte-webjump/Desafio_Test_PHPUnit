<?php

require_once 'autoload.php';

use APP\Exception\Errors\InvalidFildException;
use APP\Exception\Model\User;

try {
    $user = new User("Lucas", "lucasdgmail.com", "Lucas123");

    $user->getName();
} catch (InvalidFildException $err) {
    echo "Error" . PHP_EOL;
    echo $err->getMessage() . PHP_EOL;
} finally {
    echo "Continua as funcionalidades do app" . PHP_EOL; 
}
