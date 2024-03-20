<?php

namespace App\Http\Controllers\api;
use App\Models\Hostile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Hostilecontroller extends Controller
{
    public function list(){
        $hostiles = Hostile::all();
       
        $list = [];

        foreach($hostiles as $hostiles){
            $objet =[

                "id" => $hostiles->id,
                "name" => $hostiles->name,
                "loot"  => $hostiles->loot,
                "health" => $hostiles->health,
                "attack" => $hostiles->attack,
                "xp" => $hostiles->xp, 
                "image" => $hostiles->image,
                "created_at" => $hostiles->created_at,
                "updated_at" => $hostiles->updated_at
            ];
            array_push($list, $objet);
        }
        return response()->json($list);
    }
    public function item($id){
        $hostile = Hostile::where('id','=', $id)->first();
       
        $objet =[
            "id" => $hostile->id,
            "name" => $hostile->name,
            "loot"  => $hostile->loot,
            "health" => $hostile->health,
            "attack" => $hostile->attack,
            "xp" => $hostile->xp, 
            "image" => $hostile->image,
            "created_at" => $hostile->created_at,
            "updated_at" => $hostile->updated_at
        ];
        return response()->json($objet);
    }
    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'loot' => 'required|min:3', 
            'health' => 'required|min:1',
            'attack' => 'required|min:1',
            'xp' => 'required|min:1',
            'image' => 'required|min:3',
         
        ]);
    $hostile = Hostile::create([
        'name'=> $data['name'],
        'loot'=> $data['loot'],
        'health'=> $data['health'],
        'attack'=> $data['attack'],
        'xp'=> $data['xp'],
        'image'=> $data['image'],
      
    ]);
    if($hostile){
        $objet =[
            "response"=>'Sucess. Item saved correctly.',
            "data"=> $hostile
        ];
        return response()->json($objet);
    } else {
        $objet =[
            "response"=>'Error. Item not saved.',
            "data"=> $hostile
        ];
        return response()->json($objet);
    }
    }
    public function update(Request $request){
      $data = $request->validate([
        'id'=>'required|min:1',
          'name' => 'required|min:3',
          'loot' => 'required|min:3', 
          'health' => 'required|min:1',
          'attack' => 'required|min:1',
          'xp' => 'required|min:1',
          'image' => 'required|min:3',
      ]);
        $hostile = Hostile::where("id","=", $data['id'])->first();

        $hostile->name=$data['name'];
        $hostile->loot=$data['loot'];
        $hostile->health=$data['health'];
        $hostile->attack=$data['attack'];
        $hostile->xp=$data['xp'];
        $hostile->image=$data['image'];
        $hostile->save();
        if($hostile){
            $objet =[
                "response"=>'Sucess. Item updated correctly.',
                "data"=> $hostile
            ];
            return response()->json($objet);
        } else {
            $objet =[
                "response"=>'Error. Item not updated.',
                "data"=> $hostile
            ];
            return response()->json($objet);
        }
    }
    public function delete($id){
        $hostile = Hostile::findOrFail($id);
        $hostile->delete();

        return response()->json([
            "response"=>'Sucess. Item deleted successfully.',
        ]);
    }
}
