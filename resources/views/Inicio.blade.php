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
    <div>
        <h1 class="text-2xl font-semibold">Novedades</h1>
        <p>AQUI HIRAN LAS NOVEDADES O COSAS NUEVAS QUE SE AGREGUEN</p>
    </div>
    <div>
        <h1 class="text-2xl font-semibold">Servicios</h1>
        <p>AQUI IRAN UNOS SERVICIOS DE MUESTRA</p>
    </div>
    <div>
        <h1 class="text-2xl font-semibold">Productos</h1>
        <p>AQUI IRAN UNOS PRODUCTOS DE MUESTRA</p>
    </div>
    <div>
        <h1 class="text-2xl font-semibold">Informacion</h1>
        <p>AQUI IRA LA INFORMACION DE LOS VETERINARIOS Y SUS ESPECIALIDADES</p>
    </div>
@endsection
