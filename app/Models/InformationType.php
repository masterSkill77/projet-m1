<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InformationType extends Model
{
    use HasFactory;
    public $table = 'information_types';

    protected $fillable = ['type'];

    public function information(): HasMany
    {
        return $this->hasMany(Information::class, 'info_type');
    }
}
