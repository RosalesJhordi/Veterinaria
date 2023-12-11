<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        return view('Productos');
    }
    public function index_productos(){
        return view('Admin.Productos');
    }
    public function store(Request $request){
        $this->validate($request,[
            "nombre"        => 'required',
            "categoria"     => 'required',
            "descripcion"   => "required",
            "precio"        => "required",
            "imagen"        => "required"
        ]);

        Productos::create([
            "nombre"        => $request ->nombre,
            "categoria"     => $request ->categoria,
            "descripcion"   => $request ->descripcion,
            "precio"        => $request ->precio,
            "descuento"     => $request ->descuento,
            "imagen"        => $request ->imagen
        ]);

        return redirect()->back()->with('success', 'Producto añadido correctamente');
    }
}
