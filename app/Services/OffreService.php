<?php

namespace App\Services;

use App\Models\Offre;
use Illuminate\Database\Eloquent\Collection;

class OffreService
{
    public function __construct(protected Offre $offreModel)
    {
    }

    public function getAll(): Collection
    {
        return $this->offreModel::with('partenaire')->get();
    }
    public function getOne(int $id): Offre
    {
        return $this->offreModel::findOrFail($id);
    }
    public function create(array $data): Offre
    {
        $newOffre = new Offre($data);
        $newOffre->save();
        return $newOffre;
    }
}
