<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventRequest;
use App\Services\EventService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function __construct(public EventService $eventService)
    {
    }
    public function getAll(): JsonResponse
    {
        return response()->json($this->eventService->getAllEvent());
    }
    public function createEvent(CreateEventRequest $createData): JsonResponse
    {
        $createData->validated();
        $newEvent = $this->eventService->createEvent($createData->toArray());
        return response()->json($newEvent);
    }
}
