<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Information extends Model
{
    use HasFactory;

    public $table = 'informations';

    protected $fillable = ['info_libelle', 'info_description', 'info_arrete_min'];

    public function medias(): HasMany
    {
        return $this->hasMany(Media::class, "info_id");
    }
}
