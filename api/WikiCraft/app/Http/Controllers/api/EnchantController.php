<?php

namespace App\Http\Controllers\api;
use App\Models\Enchant;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Enchantcontroller extends Controller
{
    public function list(){
        $enchants = Enchant::all();

        $list = [];

        foreach($enchants as $enchant){
            $objet =[
                "id" => $enchant->id,
                "name" => $enchant->name,
                "type" => $enchant->type, 
                "description" => $enchant->description,
                "min_level" => $enchant->min_level,
                "max_level" => $enchant->max_level,
                "image" => $enchant->image,
                "created_at" => $enchant->created_at,
                "updated_at" => $enchant->updated_at
            ];
            array_push($list, $objet);
        }
        return response()->json($list);
    }
    public function item($id){
        $enchant = Enchant::where('id','=', $id)->first();

        $objet =[
            "id" => $enchant->id,
            "name" => $enchant->name,
            "type" => $enchant->type, 
            "description" => $enchant->description,
            "min_level" => $enchant->min_level,
            "max_level" => $enchant->max_level,
            "image" => $enchant->image,
            "created_at" => $enchant->created_at,
            "updated_at" => $enchant->updated_at
        ];
        return response()->json($objet);
    }
    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required|min:3',
            'type' => 'required|min:3',
            'description' => 'required|min:3',
            'min_level' => 'required|min:1',
            'max_level' => 'required|min:1',
            'image' => 'required|min:3',
        ]);
    $enchant = Enchant::create([
        'name'=> $data['name'],
        'type'=> $data['type'],
        'description'=> $data['description'],
        'min_level'=> $data['min_level'],
        'max_level'=> $data['max_level'],
        'image'=> $data['image']
    ]);
    if($enchant){
        $objet =[
            "response"=>'Sucess. Item saved correctly.',
            "data"=> $enchant
        ];
        return response()->json($objet);
    } else {
        $objet =[
            "response"=>'Error. Item not saved.',
            "data"=> $enchant
        ];
        return response()->json($objet);
    }
    }
    public function update(Request $request){
      $data = $request->validate([
        'id'=>'required|min:1',
          'name' => 'required|min:3',
          'type' => 'required|min:3',
          'description' => 'required|min:3',
          'min_level' => 'required|min:1',
          'max_level' => 'required|min:1',
          'image' => 'required|min:3'
      ]);
        $enchant = Enchant::where("id","=", $data['id'])->first();

        $enchant->name=$data['name'];
        $enchant->type=$data['type'];
        $enchant->description=$data['description'];
        $enchant->min_level=$data['min_level'];
        $enchant->max_level=$data['max_level'];
        $enchant->image=$data['image'];


        if($enchant->save()){
            $objet =[
                "response"=>'Sucess. Item saved correctly.',
                "data"=> $enchant
            ];
            return response()->json($objet);
        } else {
            $objet =[
                "response"=>'Error. Item not saved.',
                "data"=> $enchant
            ];
            return response()->json($objet);
        }
    }
    public function delete($id){
        $enchant = Enchant::findOrFail($id);
        $enchant->delete();

        return response()->json([
            "response"=>'Sucess. Item deleted successfully.',
        ]);
    }
    public function search(Request $request, $name) {
        $enchant = Enchant::where('name', 'LIKE', '%' . $name . '%')->get();
    
        $list = $enchant->map(function ($enchant) {
            return [
                "id" => $enchant->id,
                "name" => $enchant->name,
                "type" => $enchant->type,
                "description" => $enchant->description,
                "min_level" => $enchant->min_level,
                "max_level" => $enchant->max_level,
                "image" => $enchant->image,
                "created_at" => $enchant->created_at,
                "updated_at" => $enchant->updated_at
            ];
        });
    
        return response()->json($list);
    }
}
