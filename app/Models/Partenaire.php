<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Partenaire extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = ['partenaire_name', 'partenaire_location', 'partenaire_phone', 'partenaire_mail', 'partenaire_responsable'];
    public function offres(): HasMany
    {
        return $this->hasMany(Offre::class, 'partenaire_id');
    }
}
