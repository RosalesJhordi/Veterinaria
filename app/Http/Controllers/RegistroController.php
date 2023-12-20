<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index()
    {
        return view('Registro');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required|unique:users,telefono',
            'dni' => 'required|unique:users,dni',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'email' => $request->email,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'dni' => $request->dni,
            'password' => Hash::make($request->password),
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        $productos = Productos::paginate(10);;
        return view('Inicio', compact('productos'));
    }
}
