@if (!empty($busqueda))
    @extends('Layout.App')

    @section('titulo')
        {{ $busqueda->nombre }}
    @endsection

    @section('contenido')
        <img src="{{ asset('Productos') . '/' . $busqueda->imagen }}" alt="Imagen Producto {{ $busqueda->nombre }}">
    @endsection
@endif
