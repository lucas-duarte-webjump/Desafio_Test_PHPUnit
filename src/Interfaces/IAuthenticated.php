<?php

namespace APP\Exception\Interfaces;

interface IAuthenticated {
    public function authenticated(string $password): bool;
}