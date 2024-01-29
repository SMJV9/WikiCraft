<?php

use App\Http\Controllers\api\BiomeController;
use App\Http\Controllers\api\BlockController;
use App\Http\Controllers\api\ItemController;
use App\Http\Controllers\api\HostileController;
use App\Http\Controllers\api\EnchantController;
use App\Http\Controllers\api\MobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// API de Biome
Route::get('/Biomes',[BiomeController::class,'List']);
Route::get('/Biomes/{id}',[BiomeController::class,'item']);
Route::post('/Biomes/create',[BiomeController::class,'create']);
Route::post('/Biomes/{id}/update',[BiomeController::class,'update']);
// API de Block
Route::get('/Blocks',[BlockController::class,'List']);
Route::get('/Blocks/{id}',[BlockController::class,'item']);
Route::post('/Blocks/create',[BlockController::class,'create']);
Route::post('/Blocks/{id}/update',[BlockController::class,'update']);
// API de Item
Route::get('/Items',[ItemController::class,'List']);
Route::get('/Items/{id}',[ItemController::class,'item']);
Route::post('/Items/create',[ItemController::class,'create']);
Route::post('/Items/{id}/update',[ItemController::class,'update']);
// API de Hostile
Route::get('/Hostiles',[HostileController::class,'List']);
Route::get('/Hostiles/{id}',[HostileController::class,'item']);
Route::post('/Hostiles/create',[HostileController::class,'create']);
Route::post('/Hostiles/{id}/update',[HostileController::class,'update']);
// API de Enchant
Route::get('/Enchants',[EnchantController::class,'List']);
Route::get('/Enchants/{id}',[EnchantController::class,'item']);
Route::post('/Enchants/create',[EnchantController::class,'create']);
Route::post('/Enchants/{id}/update',[EnchantController::class,'update']);
// API de Mob
Route::get('/Mobs',[MobController::class,'List']);
Route::get('/Mobs/{id}',[MobController::class,'item']);
Route::post('/Mobs/create',[MobController::class,'create']);
Route::post('/Mobs/{id}/update',[MobController::class,'update']);