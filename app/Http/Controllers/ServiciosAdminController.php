<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ServiciosAdminController extends Controller
{
    public function index(){
        $productos = Productos::all();
        return view('Admin.Servicios',compact('productos'));
    }
}
