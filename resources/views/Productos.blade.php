@extends('Layout.App')

@section('titulo')
    Productos
@endsection

@section('contenido')
    <h1>Hola Estos son los productos</h1>
    <div class="w-full flex py-10 flex-wrap gap-5">
        @foreach ($productos as $producto)
            <div class="w-1/6 border p-2 shadow-md rounded-md">
                <img src="{{ asset('Productos') . '/' . $producto->imagen }}" alt="Imagen Producto {{ $producto->nombre }}"
                    class="w-full">
                <h1>{{ $producto->nombre }}</h1>
                <h1>{{ $producto->precio }}</h1>
                <h1>{{ $producto->descripcion }}</h1>
            </div>
        @endforeach
    </div>
@endsection
