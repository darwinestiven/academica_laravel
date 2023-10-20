<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Materias extends Controller
{
    //
    public function index(){
        return view ('materias.listado');
    }
}
