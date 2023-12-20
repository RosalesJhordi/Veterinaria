@extends('Layout.App')

@section('titulo')
    Notificaciones
@endsection

@section('contenido')
    <div class="px-80 h-screen py-10">
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
                <div class="h-1/2 w-full flex flex-col justify-center gap-5 items-center">
                    <img src="{{ asset('img/51-Messages.jpg') }}" alt="" class="w-1/3">
                    <p class="text-center font-bold text-3xl uppercase">No hay Notificaiones Nuevas</p>
                </div>
            @endforelse
        @else
            @forelse ($estado as $est)
                <div class="p-5 border font-semibold border-gray-200 flex justify-between items-center">
                    <div>
                        {{ $est->updated_at->diffForHumans() }}
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
                <div class="h-1/2 w-full flex flex-col justify-center gap-5 items-center">
                    <img src="{{ asset('img/51-Messages.jpg') }}" alt="" class="w-1/3">
                    <p class="text-center font-bold text-3xl uppercase">No hay Notificaiones Nuevas</p>
                </div>
            @endforelse
        @endif
    </div>
@endsection
