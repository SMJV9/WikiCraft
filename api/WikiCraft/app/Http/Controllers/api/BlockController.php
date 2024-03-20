<?php

namespace App\Http\Controllers\api;
use App\Models\Block;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    public function list(){
        $blocks = Block::all(); 

        $list = [];

        foreach($blocks as $blocks){
            $object =[

                "id"=> $blocks->id,
                "name"=> $blocks->name,
                "funtion"=> $blocks->funtion,
                "image"=> $blocks->image,
                "created_at" => $blocks->created_at,
                "updated_at" => $blocks->updated_at
            ];
            array_push($list, $object);
        }
        return response()->json($list);
    }
    public function item($id){
        $blocks = Block::where('id','=', $id)->first();

        $objet = [
            "id"=>$blocks->id,
            "name"=> $blocks->name,
            "funtion"=> $blocks->funtion,
            "image"=> $blocks->image,
            "created_at" => $blocks->created_at,
            "updated_at" => $blocks->updated_at
        ];
        return response()->json($objet);
    }
    public function create(Request $request){
        $data = $request->validate([
            'name'=>'required|min:3',
            'funtion'=>'required|min:4',
            'image'=>'required|min:3',
        ]);
    $block = Block::create([
        'name'=>$data['name'],
        'funtion'=>$data['funtion'],
        'image'=>$data['image'],
    ]);
    if($block){
        $objet =[
            "response"=>'Sucess. Item saved correctly.',
            "data"=> $block
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
            'funtion' => 'required|min:4',
            'image' => 'required|min:3',
        ]);
          $block = Block::where("id","=", $data['id'])->first();
  
          $block->name=$data['name'];
          $block->funtion=$data['funtion'];
            $block->image=$data['image'];
  
          if($block->update()){
              $objet =[
                  "response"=>'Sucess. Item update successfully.',
                  "data"=> $block
              ];
              return response()->json($objet);
          } else {
              $objet =[
                  "response"=> 'Error: Something went wrong, please try again.', 
                  "data"=> $block
            ];
              return response()->json($objet);
          }
      }
      public function delete($id){
        $block = Block::findOrFail($id);
        $block->delete();

        return response()->json([
            "response"=>'Sucess. Item deleted successfully.',
        ]);
    }
}