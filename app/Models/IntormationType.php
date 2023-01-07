<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntormationType extends Model
{
    use HasFactory;
    public $table = 'information_types';

    protected $fillable = ['type'];
}
