<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;
use App\Models\Biome;

class BiomesController extends Controller
{
    public function list(){
        $biomes = Biome::all();
       
        $list = [];

        foreach($biomes as $biome){
            $objet =[

                "id" => $biome->id,
                "name" => $biome->name,
                "wood" => $biome->wood,
                "dificulty" => $biome->spawn,
                "image" => $biome->image,
                "created_at" => $biome->created_at,
                "updated_at" => $biome->updated_at
            ];
            array_push($list, $objet);
        }
        return response()->json($list);
    }
}
    /*
    public function item($id){
        $biome = Biome::where('id','=', $id)->first();
       
            $objet =[

                "id" => $biome->id,
                "name" => $biome->name,
                "wood" => $biome->wood,
                "dificulty" => $biome->spawn,
                "image" => $biome->image,
                "created_at" => $biome->created_at,
                "updated_at" => $biome->updated_at
            ];
        return response()->json($objet);
    }
}
*/