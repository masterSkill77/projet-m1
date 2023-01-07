<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateOffreRequest;
use App\Services\OffreService;
use Illuminate\Http\JsonResponse;

class OffreController extends Controller
{
    public function __construct(protected OffreService $offreService)
    {
    }
    public function getAll(): JsonResponse
    {
        return response()->json($this->offreService->getAll());
    }

    public function getOne(int $id): JsonResponse
    {
        return response()->json($this->offreService->getOne($id));
    }
    public function createOffre(CreateOffreRequest $data): JsonResponse
    {
        $response = $this->offreService->create($data->toArray());
        return response()->json($response);
    }
}
