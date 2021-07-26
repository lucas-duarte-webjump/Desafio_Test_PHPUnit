<?php

namespace APP\Exception\Errors;

use DomainException;

class InvalidFildException extends DomainException
{
    public function __construct(string $field, string $value) {
        $message = "O campo {$field} com {$value} é invalido, por favor tente novamente.";

        parent::__construct($message);
    }
}