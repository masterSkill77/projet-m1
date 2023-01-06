<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'evenements';

    public $fillable = [
        'event_name', 'event_description', 'event_start', 'event_end', 'event_location', 'event_type'
    ];
    public function event_type(): BelongsTo
    {
        return $this->belongsTo(EventType::class, 'event_type');
    }
}
