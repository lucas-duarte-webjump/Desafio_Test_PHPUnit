<?php

namespace APP\Exception\Errors;

use DomainException;

class InvalidFildException extends DomainException
{
    public function __construct(string $field, string $value) {
        $message = "The field {$field} with {$value} is invalid, please try again.";

        parent::__construct($message);
    }
}