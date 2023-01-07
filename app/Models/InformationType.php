<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationType extends Model
{
    use HasFactory;
    public $table = 'information_types';

    protected $fillable = ['type'];
}