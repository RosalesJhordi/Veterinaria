@extends('Layout.App')

@section('titulo')
    Productos
@endsection

@section('contenido')
<div class="py-20 px-20">
    @livewire('producto')
</div>
@endsection
