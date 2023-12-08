<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index(){
        return view('Registro');
    }

    public function store(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:users,email',
            'nombre' =>'required',
            'apellido' =>'required',
            'telefono' =>'required|unique:users,telefono',
            'dni' =>'required|unique:users,dni',
            'password' => 'required|confirmed|min:6',
        ]);
    }
}
