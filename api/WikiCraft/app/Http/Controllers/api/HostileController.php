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

        foreach($hostiles as $hostile){
            $objet =[

                "id" => $hostile->id,
                "name" => $hostile->name,
                "health" => $hostile->health,
                "damage" => $hostile->damage,
                "xp" => $hostile->xp, 
                "image" => $hostile->image,
                "created_at" => $hostile->created_at,
                "updated_at" => $hostile->updated_at
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
            "health" => $hostile->health,
            "damage" => $hostile->damage,
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
            'health' => 'required|min:1',
            'damage' => 'required|min:1',
            'xp' => 'required|min:1',
         
        ]);
    $hostile = Hostile::create([
        'name'=> $data['name'],
        'health'=> $data['health'],
        'damage'=> $data['damage'],
        'xp'=> $data['xp'],
      
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
          'health' => 'required|min:1',
          'damage' => 'required|min:1',
          'xp' => 'required|min:1',
      ]);
        $hostile = Hostile::where("id","=", $data['id'])->first();

        $hostile->name=$data['name'];
        $hostile->health=$data['health'];
        $hostile->damage=$data['damage'];
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
}
