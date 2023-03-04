<?php

namespace App\akEminenceGroup\Base\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findOneBy(array $data): ?Model
    {
        $result = $this->model->where($data)->first();

        return $result;
    }
}
