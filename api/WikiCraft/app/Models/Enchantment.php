<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Enchant;

class Enchantment extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "item_id",
        "enchant_id"
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function enchant()
    {
        return $this->belongsTo(Enchant::class);
    }
}