@extends('Layout.App')

@section('titulo')
    Notificaciones
@endsection

@section('contenido')
    <div class="px-80 py-10">
        @forelse ($notificaciones as $notificacion)
            <div class="p-5 border font-semibold border-gray-200 flex justify-between items-center">
                <div>
                    <p class="text-xl">{{ $notificacion->data['asunto'] }}</p>
                    <p class="text-sm">{{ $notificacion->created_at->diffForHumans() }}</p>
                </div>
                <div>
                    <a href="#" class="border border-green-600 bg-green-200 text-green-600 rounded-sm p-1 text-sm">
                        Mostrar info
                    </a>
                </div>
            </div>
        @empty
            <p class="text-center font-bold text-xl">No hay Notificaiones Nuevas</p>
        @endforelse
    </div>
@endsection
