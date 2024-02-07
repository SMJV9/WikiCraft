<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class HostileController extends Controller
{
    public function index(){
        return view('Hostiles.hostiles');

    }
}
