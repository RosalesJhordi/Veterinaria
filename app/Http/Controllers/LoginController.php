<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required | email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        $productos = Productos::paginate(10);;
        return view('Inicio', compact('productos'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
