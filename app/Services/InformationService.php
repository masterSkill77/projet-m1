<?php

namespace App\Services;

use App\Models\Information;
use Illuminate\Database\Eloquent\Collection;

class InformationService
{
    public function __construct(public MediaService $mediaService, public Information $informationModel)
    {
    }
    public function getAllInfo(): Collection
    {
        return $this->informationModel::with('medias')->get();
    }

    public function getOne(int $id): Information
    {
        return $this->informationModel::with('medias')->findOrFail($id);
    }
}
