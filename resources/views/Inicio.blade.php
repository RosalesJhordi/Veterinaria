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
        <h1 class="text-2xl font-semibold">Novedades</h1>
        <p>AQUI HIRAN LAS NOVEDADES O COSAS NUEVAS QUE SE AGREGUEN</p>
    </div>
    <div class="px-20">
        <h1 class="text-2xl font-semibold">Servicios</h1>
    </div>
    <div class="px-20">
        <h1 class="text-2xl font-semibold">Productos</h1>
        <div class="w-full flex px-5 py-5 flex-wrap gap-5">
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
    </div>
    <div class="px-20">
        <h1 class="text-2xl font-semibold">Informacion</h1>
        <div class="w-full bg-blue-500 h-96 mt-5 mb-5 flex justify-between rounded-md text-white font-bold">
            <img src="{{ asset('img/cerca-veterinario-cuidando-perro.jpg') }}" alt="imagen" class="w-1/2 h-full">
            <div class="w-1/2 h-full flex gap-2 flex-col justify-center items-center">
                <h1 class="text-3xl">Unete a Nosotros</h1>
                <p class="text-xl">Puedes unirte completando un formulario y subiendo tu cv</p>
                @livewire('subir-c-v')
            </div>
        </div>
    </div>
@endsection
