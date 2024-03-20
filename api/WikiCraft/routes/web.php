<?php

use App\Http\Controllers\Hostilecontroller;
use App\Http\Controllers\EnchantController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MobController;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BiomeController;
use App\Http\Controllers\BlockController;
use App\Http\Controllers\LoginController;

Route::get('/old', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/admin',[AdminController::class,'index'])->name('admin.home');
Route::get('/biomas',[BiomeController::class,'index'])->name('Biomes.biomes');
Route::get('/bloques',[BlockController::class,'index'])->name('Blocks.blocks');
Route::get('/encantamientos',[EnchantController::class,'index'])->name('Enchants.enchant');
Route::get('/items',[ItemController::class,'index'])->name('Items.items');
Route::get('/criaturashostiles',[Hostilecontroller::class,'index'])->name('Hostiles.hostiles');
Route::get('/criaturas',[MobController::class,'index'])->name('Mobs.mobs');
