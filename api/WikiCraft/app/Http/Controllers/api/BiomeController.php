<?php

namespace App\Http\Controllers\api;
use App\Models\Biome;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BiomeController extends Controller
{
    public function list(){
        $biomes = Biome::all();
       
        $list = [];

        foreach($biomes as $biome){
            $objet =[

                "id" => $biome->id,
                "name" => $biome->name,
                "wood" => $biome->wood,
                "spawn" => $biome->spawn,
                "image" => $biome->image,
                "created_at" => $biome->created_at,
                "updated_at" => $biome->updated_at
            ];
            array_push($list, $objet);
        }
        return response()->json($list);
    }
    public function item($id){
        $biome = Biome::where('id','=', $id)->first();
       
        $objet =[
            "id" => $biome->id,
            "name" => $biome->name,
            "wood" => $biome->wood,
            "spawn" => $biome->spawn, // corregido aquí
            "image" => $biome->image,
            "created_at" => $biome->created_at,
            "updated_at" => $biome->updated_at
        ];
        return response()->json($objet);
    }
    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'wood' => 'required|min:3',
            'spawn' => 'required|min:3',
            'image' => 'required|min:3',
        ]);
    $biome = Biome::create([
        'name'=> $data['name'],
        'wood'=> $data['wood'],
        'spawn'=> $data['spawn'],
        'image'=> $data['image'],
    ]);
    if($biome){
        $objet =[
            "response"=>'Sucess. Item saved correctly.',
            "data"=> $biome
        ];
        return response()->json($objet);
    } else {
        $objet =[
            "response"=> 'Error: Something went wrong, please try again.', 
      ];
        return response()->json($objet);
    }
    }
    public function update(Request $request){
      $data = $request->validate([
        'id'=>'required|min:1',
          'name' => 'required|min:3',
          'wood' => 'required|min:3',
          'spawn' => 'required|min:3',
          'image' => 'required|min:3',
      ]);
        $biome = Biome::where("id","=", $data['id'])->first();

        $biome->name=$data['name'];
        $biome->wood=$data['wood'];
        $biome->spawn=$data['spawn'];
        $biome->image=$data['image'];

        if($biome->update()){
            $objet =[
                "response"=>'Sucess. Item update successfully.',
                "data"=> $biome
            ];
            return response()->json($objet);
        } else {
            $objet =[
                "response"=> 'Error: Something went wrong, please try again.', 
                "data"=> $biome
          ];
            return response()->json($objet);
        }
    }
    public function delete($id){
        $biome = Biome::findOrFail($id);
        $biome->delete();

        return response()->json([
            "response"=>'Sucess. Item deleted successfully.',
        ]);
    }
}