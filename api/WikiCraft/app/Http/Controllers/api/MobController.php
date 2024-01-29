<?php

namespace App\Http\Controllers\api;
use App\Models\Mob;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobController extends Controller
{
        public function list(){
            $mobs = Mob::all();

            $list = [];

            foreach($mobs as $mob){
                $objet =[
                    "id" => $mob->id,
                    "name" => $mob->name,
                    "loot" => $mob->loot,
                    "health" => $mob->health,
                    "attack" => $mob->attack,
                    "xp" => $mob->xp,
                    "image" => $mob->image,
                    "created_at" => $mob->created_at,
                    "updated_at" => $mob->updated_at
                ];
                array_push($list, $objet);
            }
            return response()->json($list);
        }
        public function item($id){
            $mob = Mob::where('id','=', $id)->first();

            $objet =[
                "id" => $mob->id,
                "name" => $mob->name,
                "loot" => $mob->loot,
                "health" => $mob->health,
                "attack" => $mob->attack,
                "xp" => $mob->xp,
                "image" => $mob->image,
                "created_at" => $mob->created_at,
                "updated_at" => $mob->updated_at
            ];
            return response()->json($objet);
        }
        public function create(Request $request){
            $data = $request->validate([
                'name' => 'required|min:3',
                'loot' => 'required|min:3',
                'health' => 'required|min:3',
                'attack' => 'required|min:3',
                'xp' => 'required|min:3',
                'image' => 'required|min:3'
            ]);
        $mob = Mob::create([
            'name'=> $data['name'],
            'loot'=> $data['loot'],
            'health'=> $data['health'],
            'attack'=> $data['attack'],
            'xp'=> $data['xp'],
            'image'=> $data['image']
        ]);
        if($mob){
            $objet =[
                "response"=>'Sucess. Item saved correctly.',
                "data"=> $mob
            ];
            return response()->json($objet);
        } else {
            $objet =[
                "response"=>'Error. Item not saved.',
                "data"=> $mob
            ];
            return response()->json($objet);
        }
        }
        public function update(Request $request){
          $data = $request->validate([
            'id'=>'required|min:1',
              'name' => 'required|min:3',
              'loot' => 'required|min:3',
              'health' => 'required|min:3',
              'attack' => 'required|min:3',
              'xp' => 'required|min:3',
              'image' => 'required|min:3'
          ]);
            $mob = Mob::where("id","=", $data['id'])->first();

            $mob->name=$data['name'];
            $mob->loot=$data['loot'];
            $mob->health=$data['health'];
            $mob->attack=$data['attack'];
            $mob->xp=$data['xp'];
            $mob->image=$data['image'];

            if($mob->save()){
                $objet =[
                    "response"=>'Sucess. Item updated correctly.',
                    "data"=> $mob
                ];
                return response()->json($objet);
            } else {
                $objet =[
                    "response"=>'Error. Item not updated.',
                ];
                return response()->json($objet);
            }
        }
}
