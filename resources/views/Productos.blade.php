@extends('Layout.App')

@section('titulo')
    Productos
@endsection

@section('contenido')
    <h1>Hola Estos son los productos</h1>
    <div class="w-full flex px-5 bg-black justify-start py-5 flex-wrap gap-5">
        @foreach ($productos as $producto)
            <div class="w-60 border-gray-200 bg-gray-100 border shadow-md rounded-md">
                <img src="{{ asset('Productos') . '/' . $producto->imagen }}"
                    alt="Imagen Producto {{ $producto->nombre }}" class="w-full h-60">
                <h1>{{ $producto->nombre }}</h1>
                <h1>{{ $producto->precio }}</h1>
                <h1>{{ $producto->precio }}</h1>
            </div>
        @endforeach
    </div>
@endsection
