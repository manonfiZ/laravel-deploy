<?php

namespace App\akEminenceGroup\Users\Repositories\Interfaces;

use App\akEminenceGroup\Users\User;

interface UserRepositoryInterface
{
    public function create(array $data): User;
}
