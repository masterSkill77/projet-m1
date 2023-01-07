<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Information extends Model
{
    use HasFactory;

    public $table = 'informations';

    protected $fillable = ['info_libelle', 'info_description', 'info_arrete_min', 'info_type'];

    public function medias(): HasMany
    {
        return $this->hasMany(Media::class, "info_id");
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(InformationType::class, 'info_type');
    }
}
