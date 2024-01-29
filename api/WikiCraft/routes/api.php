<?php

// use App\Http\Controllers\api\BiomesController;
use App\Http\Controllers\api\biomesController;
use App\Http\Controllers\api\BlocksController;
use App\Http\Controllers\api\ItemsController;
use App\Http\Controllers\api\HostilesController;
use App\Http\Controllers\api\EnchantsController;
use App\Http\Controllers\api\MobsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// API de biomes
Route::get('/biomes',[BiomesController::class,'List']);
Route::get('/biomes/{id}',[BiomesController::class,'item']);
Route::post('/biomes/create',[BiomesController::class,'create']);
Route::post('/biomes/{id}/update',[BiomesController::class,'update']);
// API de blocks
Route::get('/blocks',[BlocksController::class,'List']);
Route::get('/blocks/{id}',[BlocksController::class,'item']);
Route::post('/blocks/create',[BlocksController::class,'create']);
Route::post('/blocks/{id}/update',[BlocksController::class,'update']);
// API de items
Route::get('/items',[ItemsController::class,'List']);
Route::get('/items/{id}',[ItemsController::class,'item']);
Route::post('/items/create',[ItemsController::class,'create']);
Route::post('/items/{id}/update',[ItemsController::class,'update']);
// API de hostiles
Route::get('/hostiles',[HostilesController::class,'List']);
Route::get('/hostiles/{id}',[HostilesController::class,'item']);
Route::post('/hostiles/create',[HostilesController::class,'create']);
Route::post('/hostiles/{id}/update',[HostilesController::class,'update']);
// API de enchants
Route::get('/enchants',[EnchantsController::class,'List']);
Route::get('/enchants/{id}',[EnchantsController::class,'item']);
Route::post('/enchants/create',[EnchantsController::class,'create']);
Route::post('/enchants/{id}/update',[EnchantsController::class,'update']);
// API de mobs
Route::get('/mobs',[MobsController::class,'List']);
Route::get('/mobs/{id}',[MobsController::class,'item']);
Route::post('/mobs/create',[MobsController::class,'create']);
Route::post('/mobs/{id}/update',[MobsController::class,'update']);