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

    public function getByEventDate(string $event_start): Collection
    {
        return $this->eventModel::with('event_type')->where('event_start', '=', $event_start)->get();
    }

    public function getEventBetweenDate(string $event_start, string $event_end): Collection
    {
        return $this->eventModel::with('event_type')->where('event_start', '>=', $event_start)->where('event_end', '<=', $event_end)->get();
    }


    public function createEvent($data): Event
    {
        $event = new Event($data);
        $event->save();
        return $event;
    }
}
