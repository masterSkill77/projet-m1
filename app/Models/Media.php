<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;
    protected $fillable = ['ext', 'filename', 'info_id'];

    public function information(): BelongsTo
    {
        return $this->belongsTo(Information::class, "info_id");
    }
}
