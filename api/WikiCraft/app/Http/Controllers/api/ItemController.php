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
                "image" => $item->image,
                "stack"=>$item->stack,
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
        "image" => $item->image,
        "stack"=>$item->stack,
        "created_at" => $item->created_at,
        "updated_at" => $item->updated_at
    ];
    return response()->json($objet);
    }
    public function create(Request $request){
     $data = $request->validate([
        'name' => 'requiered|min:3',
        'stack' => 'requiered|min:1|max"64'
     ]);   
     $item = Item::create([
        'name'=> $data['name'],
        'stack'=> $data['stack']
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
            'stack' => 'required|min:1|max:64'
        ]);
          $item = Item::where("id","=", $data['id'])->first();
  
          $item->name=$data['name'];
          $item->stack=$data['stack'];
  
          if($item->update()){
              $objet =[
                  "response"=>'Sucess. Item update successfully.',
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
  }