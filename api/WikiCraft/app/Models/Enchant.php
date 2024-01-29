<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'type',
        'description',
        'min_level',
        'max_level',
        'image',
    ];
}
