@extends('Admin.Layout.Panel')

@section('titulo')
    Productos
@endsection

@section('contenido')
    <div class="w-full px-5 flex flex-wrap gap-1">
        @foreach ($solicitudes as $soli)
            <div class="w-full p-2 bg-gray-200 font-bold flex justify-between items-center">
                <p>{{ $soli->user->nombre }}</p>
                <p>{{ $soli->created_at->diffForHumans() }}</p>
                <div>
                    <a href="{{ asset('storage/cvs/' . $soli->cv) }}"
                        class="border border-green-600 text-green-600 bg-green-200 text-xm rounded-xl px-5 p-1">Ver cv</a>
                    <a href=""
                        class="border border-blue-600 text-blue-600 bg-blue-200 text-xm rounded-xl px-5 p-1">Aceptar</a>
                    <a href="" class="border border-red-600 text-red-600 bg-red-200 text-xm rounded-xl px-5 p-1">Negar</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
