<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\InformationService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InformationTypeController extends Controller
{
    public function __construct(public InformationService $informationService)
    {
    }
    public function getAllType(): JsonResponse
    {
        return response()->json($this->informationService->getAllType());
    }
    public function createType(Request $request): JsonResponse
    {
        $request->validate(['type' => 'required|string|min:4|unique:information_types']);

        $newType = $this->informationService->createType($request->type);

        return response()->json($newType);
    }
}
