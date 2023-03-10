<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventType extends Model
{
    use HasFactory;

    public $table = 'evenement_types';
    public $fillable = ['event_type'];
    // public function event(): HasMany
    // {
    //     return $this->hasMany(Event::class, 'event_type');
    // }
}
