<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEventRequest;
use App\Services\EventService;
use Facade\FlareClient\Http\Exceptions\BadResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

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
    public function getEventByType(int $type): JsonResponse
    {
        return response()->json($this->eventService->getByEventType($type));
    }
    public function getEventByDate($date): JsonResponse
    {
        $validation = Validator::make(['date' => $date], [
            'date' => 'required|date'
        ]);
        if ($validation->fails()) {
            return response()->json(['message' => 'Parameters must be a valid date in format `Y-m-d`', 'error_code' => 'BAD_REQUEST', 'description' => "`$date` is not a valid date"], 400);
        }
        return response()->json($this->eventService->getByEventDate($date));
    }
}
