<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'evenements';
    public function event_type(): BelongsTo
    {
        return $this->belongsTo(EventType::class, 'event_type');
    }
}
