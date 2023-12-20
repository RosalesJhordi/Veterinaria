@extends('Layout.App')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="w-full flex justify-center items-center gap-10 bienvenida">
        <img src="{{ asset('img/logo.jpg') }}" alt="" style="height: 100%; width: 25%;">
        <div class="w-1/3 flex flex-col gap-10">
            <span class="font-bold text-5xl">Bienvenido a Petshop</span>
            <p class="text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque vel voluptas, amet nulla
                sunt voluptatum quam maxime recusandae, sed deserunt natus delectus? Incidunt enim, iure consequatur eum
                quidem delectus repudiandae ab adipisci dolorem, accusantium, odit ipsa tenetur ex nemo esse. Voluptates
                eligendi hic repellat sed blanditiis voluptatem quis. Provident, cupiditate.</p>
            <div class="flex gap-5 text-2xl">
                <a href="" class="text-blue-500 hover:text-blue-700">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="" class="text-green-500 hover:text-green-600">
                    <i class="fa-brands fa-square-whatsapp"></i>
                </a>
                <a href="" class="text-gray-500 hover:text-gray-900">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="" class="text-sky-500 hover:text-sky-600">
                    <i class="fa-brands fa-telegram"></i>
                </a>
                <a href="" class="text-gray-700 hover:text-gray-900">
                    <i class="fa-solid fa-square-phone-flip"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="px-20">
        <h1 class="text-2xl font-semibold">Servicios</h1>
    </div>
    <div class="px-20">
        <h1 class="text-2xl font-semibold">Productos</h1>
        <div class="w-full flex px-5 py-5 flex-wrap gap-5">
            @foreach ($productos as $producto)
                <div class="w-72 relative h-96 border-gray-200 bg-gray-100 border shadow-md rounded-md">
                    <img src="{{ asset('Productos') . '/' . $producto->imagen }}"
                        alt="Imagen Producto {{ $producto->nombre }}" class="w-full h-64">
                    <div class="flex justify-between px-2 uppercase font-bold p-2">
                        <h1 class="">{{ $producto->nombre }}</h1>
                        @if ($producto->descuento != null || $producto->descuento != 0)
                            <h1 class="border border-green-600 bg-green-200 text-green-600 w-20 rounded-full text-center">S/. {{ $producto->precio - ($producto->precio * ($producto->descuento ?? 0) / 100) }}
                            </h1>
                        @else
                           <h1 class="border border-green-600 bg-green-200 text-green-600 w-20 rounded-full text-center">S/. {{ $producto->precio }}</h1>
                        @endif
                    </div>
                    @if ($producto->descuento != null || $producto->descuento != 0)
                        <div class="flex justify-end absolute top-0 font-extrabold text-xl">
                            <h1 class=" border border-red-600 bg-red-200 text-red-600 w-20 p-1 text-center">-{{ $producto->descuento }}%</h1>
                        </div>
                    @endif
                    <div class="flex justify-end absolute top-0 right-0 text-gray-400 cursor-pointer hover:text-red-500 bg-white p-2 font-extrabold text-xl" style="border-radius: 200px 0px 200px 200px;">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    @if ($producto->descuento != null || $producto->descuento != 0)
                        <div class="flex justify-end px-2">
                            <h1 class="line-through border border-red-600 bg-red-200 text-red-600 rounded-full w-20 text-center font-bold">S/. {{ $producto->precio }}</h1>
                        </div>
                    @endif
                    <div class="w-full absolute bottom-0 flex justify-center items-center">
                        <button class="bg-blue-500 hover:bg-blue-600 text-white p-1.5 w-80 rounded-sm uppercase font-semibold">
                            Añadir a carrito
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="my-5 px-10">
            {{ $productos->links() }}
        </div>
    </div>
    <div class="px-20">
        <div class="w-full bg-blue-500 h-1/2 mt-5 mb-5 flex justify-between items-center rounded-md text-white font-bold">
            <img src="{{ asset('img/cerca-veterinario-cuidando-perro.jpg') }}" alt="imagen" class="w-1/2 h-full">
            <div class="w-1/2 h-full flex gap-2 flex-col justify-center items-center">
                <h1 class="text-3xl">Unete a Nosotros</h1>
                <p class="text-xl">Puedes unirte subiendo tu cv</p>
                @if (auth()->user())
                    @livewire('subir-c-v')
                @else
                    <p class="border border-red-600 uppercase bg-red-100 text-red-600 font-bold p-1 text-sm">Debes inicia
                        sesion o crear una cuenta para poder subir tu CV u Hoja de vida</p>
                @endif
            </div>
        </div>
    </div>
@endsection
