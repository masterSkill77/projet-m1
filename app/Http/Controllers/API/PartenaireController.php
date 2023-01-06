<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePartenaireRequest;
use App\Services\PartenaireService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function __construct(public PartenaireService $partenaireService)
    {
    }

    public function getAll(): JsonResponse
    {
        return response()->json($this->partenaireService->getAll());
    }
    public function createPartenaire(CreatePartenaireRequest $data): JsonResponse
    {
        $newPartenaire = $this->partenaireService->create($data->toArray());
        return response()->json($newPartenaire);
    }

    public function getOne(int $id): JsonResponse
    {
        return response()->json($this->partenaireService->getOne($id));
    }
}
