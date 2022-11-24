<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    function listar() {
        $clientes = Customer::get();
        return dd($clientes);
    }

    function index() {
        $listado = DB::table("customers")->get();
        return view('clientes', compact('listado'));
    }
}

