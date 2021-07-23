<?php

require_once 'autoload.php';

use APP\Exception\Errors\InvalidFildException;
use APP\Exception\Model\User;
use APP\Exception\Services\AuthenticatedUser;

try {
    $user = new User("Lucas", "lucasd@gmail.com", "Lucas123");

    $authenticatedUser = new AuthenticatedUser();

    echo $authenticatedUser->login($user, 'Lucas123') . PHP_EOL;

    $user->getName();
} catch (InvalidFildException | InvalidArgumentException $err) {
    echo "Error" . PHP_EOL;
    echo $err->getMessage() . PHP_EOL;
} finally {
    $productList = [
        '123.445.789-10' => [
            'Nome' => 'Bola de Futebol',
            'Preco' => 220.00,
            'Quantidade' => 20,
        ],
        '123.445.789-10' => [
            'nome' => 'Carrinho',
            'preco' => 100.00,
            'quantidade' => 50
        ],
    ];

    var_dump($productList);
}

