<?php

use App\Http\Controllers\api\BiomeController;
use App\Http\Controllers\api\BlockController;
use App\Http\Controllers\api\ItemController;
use App\Http\Controllers\api\HostileController;
use App\Http\Controllers\api\EnchantController;
use App\Http\Controllers\api\MobController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\EnchantmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// API de Biome
Route::get('/Biomes',[BiomeController::class,'List']);
Route::get('/Biomes/{id}',[BiomeController::class,'item']);
Route::post('/Biomes/create',[BiomeController::class,'create']);
Route::post('/Biomes/update',[BiomeController::class,'update']);
Route::delete('/Biomes/{id}',[BiomeController::class,'delete']);
// API de Block
Route::get('/Blocks',[BlockController::class,'List']);
Route::get('/Blocks/{id}',[BlockController::class,'item']);
Route::post('/Blocks/create',[BlockController::class,'create']);
Route::post('/Blocks/update',[BlockController::class,'update']);
Route::delete('/Blocks/{id}',[BlockController::class,'delete']);
// API de Item
Route::get('/Items',[ItemController::class,'List']);
Route::get('/Items/{id}',[ItemController::class,'item']);
Route::post('/Items/create',[ItemController::class,'create']);
Route::post('/Items/update',[ItemController::class,'update']);
Route::delete('/Items/{id}',[ItemController::class,'delete']);
Route::get('/Items/search/{name}',[ItemController::class,'search']);
// API de Hostile
Route::get('/Hostiles',[HostileController::class,'List']);
Route::get('/Hostiles/{id}',[HostileController::class,'item']);
Route::post('/Hostiles/create',[HostileController::class,'create']);
Route::post('/Hostiles/update',[HostileController::class,'update']);
Route::delete('/Hostiles/{id}',[HostileController::class,'delete']);
// API de Enchant
Route::get('/Enchants',[EnchantController::class,'List']);
Route::get('/Enchants/{id}',[EnchantController::class,'item']);
Route::post('/Enchants/create',[EnchantController::class,'create']);
Route::post('/Enchants/update',[EnchantController::class,'update']);
Route::delete('/Enchants/{id}',[EnchantController::class,'delete']);
Route::get('/Enchants/search/{name}',[EnchantController::class,'search']);
// API de Mob
Route::get('/Mobs',[MobController::class,'List']);
Route::get('/Mobs/{id}',[MobController::class,'item']);
Route::post('/Mobs/create',[MobController::class,'create']);
Route::post('/Mobs/update',[MobController::class,'update']);
Route::delete('/Mobs/{id}',[MobController::class,'delete']);
// API de User
Route::get('/users',[UserController::class,'list']);
Route::get('/users/{id}',[UserController::class,'item']);
Route::post('/users/create',[UserController::class,'create']);
Route::post('/users/update',[UserController::class,'update']);
Route::delete('/users/{id}',[UserController::class,'delete']);
// API de enchantment
Route::get('/enchantments',[EnchantmentController::class,'list']);
Route::get('/enchantments/{id}',[EnchantmentController::class,'item']);
Route::post('/enchantments/create',[EnchantmentController::class,'create']);
Route::post('/enchantments/update',[EnchantmentController::class,'update']);
Route::delete('/enchantments/{id}',[EnchantmentController::class,'delete']);
// API de Auth 
Route::post('/login',[AuthController::class,'login']);
Route::post('/login/{id}',[AuthController::class,'login']);