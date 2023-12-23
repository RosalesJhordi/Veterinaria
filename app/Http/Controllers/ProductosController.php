<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index_inicio(){
        return view('Productos');
    }
    public function index_productos(){
        $productos = Productos::all();
        return view('Admin.Productos',compact('productos'));
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

    public function delete($id) {
        $product = Productos::find($id);
        $img = $product->imagen;
        $path = public_path('Productos') . '/' . $img;
        if (file_exists($path)) {
            unlink($path);
            $product->delete();
            return redirect()->back()->with('success', 'Producto Eliminado con éxito');
        }
    }

    public function show_busqueda($id) {
        $busqueda = Productos::where('id', $id)->first();
        return view('shows.VisorBusqueda',compact('busqueda'));
    }
}
