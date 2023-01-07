<?php

namespace App\Services;

use App\Models\Partenaire;
use Illuminate\Database\Eloquent\Collection;

class PartenaireService
{
    public function __construct(public Partenaire $partenaireModel)
    {
    }

    public function getAll(): Collection
    {
        return $this->partenaireModel::all();
    }

    public function create(array $data): Partenaire
    {
        $partenaire = new Partenaire($data);
        $partenaire->save();
        return $partenaire;
    }
    public function getOne(int $id): Partenaire | null
    {
        return $this->partenaireModel::with('offres')->findOrFail($id);
    }
}
