<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class MobController extends Controller
{
    public function index(){
        return view('Mobs.mobs');

    }
}
