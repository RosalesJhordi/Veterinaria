@extends('Layout.App')

@section('titulo')
    Inicio
@endsection

@section('contenido')
    <div class="w-full h-1/2 px-10 py-5 flex justify-center items-center gap-10 bienvenida">
        <div class="slider-container rounded-full shadow-md">
            <div class="image-container">
                <img src="{{ asset('img/hermoso-retrato-mascota-perro-comida.webp') }}" alt="img3">
            </div>
        </div>
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
        @livewire('products')
    </div>
    <div class="px-20">
        <div class="w-full bg-blue-500 mt-5 mb-5 flex justify-between items-center rounded-md text-white font-bold">
            <img src="{{ asset('img/cerca-veterinario-cuidando-perro.jpg') }}" alt="imagen" class="w-1/2 h-full">
            <div class="w-1/2 h-full flex gap-2 flex-col justify-center items-center">
                <h1 class="text-3xl">Unete a Nosotros</h1>
                <p class="text-xl">Puedes subir tu cv para luego ser evaluado</p>
                @if (auth()->user())
                    @livewire('subir-c-v')
                @else
                    <p class="border border-red-600 uppercase bg-red-100 text-red-600 font-bold p-1 text-sm">Debes inicia
                        sesion o crear una cuenta para poder subir tu CV u Hoja de vida</p>
                @endif
            </div>
        </div>
    </div>

    @push('scripts')
    <script>
        function addToCart(id) {
            Livewire.emit('addToCart', id);
        }
    </script>
@endpush
@endsection
