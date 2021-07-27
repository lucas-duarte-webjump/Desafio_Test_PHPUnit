<?php 

namespace APP\Exception\Interfaces;

use APP\Exception\Model\User;

interface IUserRepository {
    public function create(User $user): array;

    public function find(): array;
}