<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view('Productos');
    }
    public function index_productos(){
        return view('Admin.Productos');
    }
}
