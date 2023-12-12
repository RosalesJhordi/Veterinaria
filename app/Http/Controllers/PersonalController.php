<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        $productos = Productos::all();
        return view('Admin.Personal',compact('productos'));
    }
}
