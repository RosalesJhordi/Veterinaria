@extends('Admin.Layout.Panel')

@section('titulo')
    Productos
@endsection

@section('contenido')
<div class="w-full px-5 flex flex-wrap gap-5">
    @foreach ($solicitudes as $soli)
    <p>User ID: {{ $soli->user->id }}</p>
    <p>User Name: {{ $soli->user->nombre }}</p>
    <p>CV: <a href="{{ asset('storage/cvs/' . $soli->cv) }}">Ver CV</a></p>
@endforeach


</div>
@endsection
