<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\InformationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function __construct(public InformationService $informationService)
    {
    }

    public function getAll(): JsonResponse
    {
        return response()->json($this->informationService->getAll());
    }
    public function getOne(int $id): JsonResponse
    {
        return response()->json($this->informationService->getOne($id));
    }

    public function getInfoByType(int $idType): JsonResponse
    {
        return response()->json($this->informationService->getInfoByType($idType));
    }
}
