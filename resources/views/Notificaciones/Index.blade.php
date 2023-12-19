@extends('Layout.App')

@section('titulo')
    Notificaciones
@endsection

@section('contenido')
    <div class="px-80 py-10">
        @if (auth()->user()->email == 'yhordiyhom65@gmail.com')
            @forelse ($notificaciones as $notificacion)
                <div class="p-5 border font-semibold border-gray-200 flex justify-between items-center">
                    <div>
                        <p class="text-xl">{{ $notificacion->data['asunto'] }}</p>
                        <p class="text-sm">{{ $notificacion->created_at->diffForHumans() }}</p>
                    </div>
                    <div>
                        <a href="{{ route('Solicitudes') }}"
                            class="border border-green-600 bg-green-200 text-green-600 rounded-sm p-1 text-sm">
                            Ir a panel
                        </a>
                    </div>
                </div>
            @empty
                <p class="text-center font-bold text-xl">No hay Notificaiones Nuevas</p>
            @endforelse
        @else
            @forelse ($estado as $est)
                <div class="p-5 border font-semibold border-gray-200 flex justify-between items-center">
                    <div>
                        @if ($est->estado == 'Aceptado')
                            <p class="text-xl text-green-600 font-bold">Tu solicitus de union subido
                                {{ $est->created_at->diffForHumans() }} a sido {{ $est->estado }}
                            </p>
                        @elseif ($est->estado == 'Negado')
                            <p class="text-xl text-red-600 font-bold">Tu solicitus de union subido
                                {{ $est->created_at->diffForHumans() }} a sido {{ $est->estado }}
                            </p>
                        @else
                        <p class="text-xl text-blue-600 font-bold">Tu solicitus de union subido
                            {{ $est->created_at->diffForHumans() }} esta {{ $est->estado }}
                        </p>
                        @endif
                    </div>
                </div>
            @empty
                <p class="text-center font-bold text-xl">No hay Notificaiones Nuevas</p>
            @endforelse
        @endif
    </div>
@endsection
