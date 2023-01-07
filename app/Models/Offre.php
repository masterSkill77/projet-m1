<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = ["offre_title", "offre_description", "offre_number_need", "offre_type", "offre_niveau", "partenaire_id"];

    public function partenaire(): BelongsTo
    {
        return $this->belongsTo(Partenaire::class, "partenaire_id");
    }
}
