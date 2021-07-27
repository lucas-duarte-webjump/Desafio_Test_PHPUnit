<?php

require_once 'vendor/autoload.php';

use APP\Exception\Errors\InvalidFildException;
use APP\Exception\Services\AuthenticatedUser;
use APP\Exception\Services\UserService;

try {
   

    $user = new UserService();

    $user->execute('Lucas', 'lucas@gmail.com', 'Lucas12345');


    foreach($user->getUser() as $i => $data) {
        var_dump($data);
    }

    //  $authenticatedUser = new AuthenticatedUser();

    //  echo $authenticatedUser->login( 'Lucas123') . PHP_EOL;

} catch (InvalidFildException | InvalidArgumentException $err) {
    echo "Error" . PHP_EOL;
    echo $err->getMessage() . PHP_EOL;
} finally {
    // $productList = [
    //     '123.445.789-10' => [
    //         'Nome' => 'Bola de Futebol',
    //         'Preco' => 220.00,
    //         'Quantidade' => 20,
    //     ],
    //     '123.445.789-10' => [
    //         'nome' => 'Carrinho',
    //         'preco' => 100.00,
    //         'quantidade' => 50
    //     ],
    // ];

    // var_dump($productList);
}

