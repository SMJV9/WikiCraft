<?php

// use App\Http\Controllers\api\BiomesController;
use App\Http\Controllers\api\biomesController;
use App\Http\Controllers\api\BlocksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/biomes',[BiomesController::class,'List']);
Route::get('/biomes/{id}',[BiomesController::class,'item']);
Route::post('/biomes/create',[BiomesController::class,'create']);
Route::post('/biomes/{id}/update',[BiomesController::class,'update']);

Route::get('/blocks',[BlocksController::class,'List']);
Route::get('/blocks/{id}',[BlocksController::class,'item']);
Route::post('/blocks/create',[BlocksController::class,'create']);
Route::post('/blocks/{id}/update',[BlocksController::class,'update']);