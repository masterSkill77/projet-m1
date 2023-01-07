<?php

namespace App\Services;

use App\Models\Information;
use App\Models\InformationType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class InformationService extends Service
{
    public function __construct(public MediaService $mediaService, public InformationType $informationTypeModel, public Information $informationModel)
    {
    }
    public function getAll(): Collection
    {
        return $this->informationModel::with('medias')->get();
    }

    public function getOne(int $id): Information
    {
        return $this->informationModel::with('medias')->findOrFail($id);
    }

    public function createType(string $type): InformationType
    {
        $newType = new InformationType();
        $newType->type = $type;
        $newType->save();
        return $newType;
    }

    public function getAllType(): Collection
    {
        return $this->informationTypeModel::all();
    }

    public function getInfoByType(int $idType): Collection
    {
        return $this->informationModel::where('info_type', '=', $idType)->get();
    }

    public function create(array $data): Information
    {

        $newInfo = new Information($data);
        $newInfo->save();
        if ($data['file']) {
            $this->mediaService->create($data['file'], $newInfo->id);
        }
        return $newInfo;
    }
}
