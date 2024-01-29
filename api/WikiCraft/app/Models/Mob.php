<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Mob extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'loot',
        'health',
        'attack',
        'xp',
        'image',
    ];
}
