<?php

namespace App\Http\Controllers\api;
use App\Models\Enchantment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnchantmentController extends Controller
{
    public function list(){
        $enchantments = Enchantment::all();

        $list = [];

        foreach($enchantments as $enchantment){
            $objet =[
                "id" => $enchantment->id,
                "name" => $enchantment->name,
                "item_id" => $enchantment->item_id, 
                "enchant_id" => $enchantment->enchant_id,
                "created_at" => $enchantment->created_at,
                "updated_at" => $enchantment->updated_at
            ];
            array_push($list, $objet);
        }
        return response()->json($list);
    }
    public function item($id){
        $enchantment = Enchantment::where('id','=', $id)->first();

        $objet =[
            "id" => $enchantment->id,
            "name" => $enchantment->name,
            "item_id" => $enchantment->item_id, 
            "enchant_id" => $enchantment->enchant_id,
            "created_at" => $enchantment->created_at,
            "updated_at" => $enchantment->updated_at
        ];
        return response()->json($objet);
    }
    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required|min:1', 
            'item_id' => 'required|min:1',
            'enchant_id' => 'required|min:1',
        ]);
    $enchantment = Enchantment::create([
        'name'=> $data['name'], 
        'item_id'=> $data['item_id'],
        'enchant_id'=> $data['enchant_id'],
    ]);
    if($enchantment){
        $objet =[
        "response" => "Enchantment created",
        "data"=> $enchantment
        ];
        return response()->json($objet);
    }else{
        $objet =[
        "response" => "Enchantment not created",
        "data"=> $enchantment
        ];
        return response()->json($objet);
    }
    }
    public function update(Request $request){
        $data = $request->validate([
          'id'=>'required|min:1',
            'name' => 'required|min:1',
            'item_id' => 'required|min:1',
            'enchant_id' => 'required|min:1',
        ]);
          $enchantment = Enchantment::where("id","=", $data['id'])->first();
  
             $enchantment->name=$data['name'];
            $enchantment->item_id=$data['item_id'];
            $enchantment->enchant_id=$data['enchant_id'];
  
  
          if($enchantment->save()){
              $objet =[
                  "response"=>'Sucess. Item saved correctly.',
                  "data"=> $enchantment
              ];
              return response()->json($objet);
          } else {
              $objet =[
                  "response"=>'Error. Item not saved.',
                  "data"=> $enchantment
              ];
              return response()->json($objet);
          }
      }

      public function delete($id){
        $enchantment = Enchantment::findOrFail($id);
        $enchantment->delete();

        return response()->json([
            "response"=>'Sucess. Item deleted successfully.',
        ]);
    }

}
