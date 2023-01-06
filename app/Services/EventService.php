<?php

namespace App\Services;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class EventService
{
    public function __construct(public Event $eventModel)
    {
    }
    public function getAllEvent(): Collection
    {
        return $this->eventModel::with('event_type')->get();
    }
    public function getByEventType(int $event_type): Collection
    {
        return $this->eventModel::with('event_type')->where('event_type', '=', $event_type)->get();
    }

    public function createEvent($data): Event
    {
        $event = new Event($data);
        $event->save();
        return $event;
    }
}
