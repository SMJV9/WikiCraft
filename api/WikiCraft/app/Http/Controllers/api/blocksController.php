<?php

namespace App\Http\Controllers\api;
use App\Models\Block;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blocskController extends Controller
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

}