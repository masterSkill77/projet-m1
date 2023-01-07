<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class Service
{
    public abstract function getAll(): Collection;

    public abstract function getOne(int $id);

    public abstract function create(array $data): Model;
}
