<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmpleadoController extends   Controller
{
    function index() {
        $listado = DB::table("employees")->get();
        return view('empleados', compact('listado'));
    }
}
