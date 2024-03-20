<?php

namespace App\Http\Controllers\api;
use App\Models\Item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function list(){
        $items = Item::all();

        $list = [];

        foreach($items as $item){
            $objet =[

                "id" => $item->id,
                "name" => $item->name,
                "stack"=>$item->stack,
                "image" => $item->image,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at
            ];
            array_push($list, $objet);
        }
        return response()->json($list);
    }
    public function item($id){
    $item = Item::where('id','=',$id)->first();

    $objet =[

        "id" => $item->id,
        "name" => $item->name,
        "stack"=>$item->stack,
        "image" => $item->image,
        "created_at" => $item->created_at,
        "updated_at" => $item->updated_at
    ];
    return response()->json($objet);
    }
    public function create(Request $request){
    $data = $request->validate([
        'name' => 'required|min:3',
        'stack' => 'required|min:1|max:64',
        'image' => 'required|min:3',
    ]); 
     $item = Item::create([
        'name'=> $data['name'],
        'stack'=> $data['stack'],
        'image'=> $data['image'],
    ]);
     if($item){
        $objet =[
            "response"=>'Sucess. Item saved correctly.',
            "data"=> $item
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
            'stack' => 'required|min:1|max:64',
            'image' => 'required|min:3',
        ]);
          $item = Item::where("id","=", $data['id'])->first();
  
          $item->name=$data['name'];
          $item->stack=$data['stack'];
            $item->image=$data['image'];
  
          if($item->update()){
              $objet =[
                  "response"=>'Sucess. Item update successfully.',
                  "data"=> $item
              ];
              return response()->json($objet);
          } else {
              $objet =[
                  "response"=> 'Error: Something went wrong, please try again.', 
                  "data"=> $item
            ];
              return response()->json($objet);
          }
      }
      public function delete($id){
        $item = Item::findOrFail($id);
        $item->delete();

        return response()->json([
            "response"=>'Sucess. Item deleted successfully.',
        ]);
    }
    public function search(Request $request, $name) {
        $items = Item::where('name', 'LIKE', '%' . $name . '%')->get();
    
        $list = $items->map(function ($item) {
            return [
                "id" => $item->id,
                "name" => $item->name,
                "stack" => $item->stack,
                "image" => $item->image,
                "created_at" => $item->created_at,
                "updated_at" => $item->updated_at
            ];
        });
    
        return response()->json($list);
    }
    
    
}