<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Panel Administrador</title>
    @vite('resources/css/app.css')
    @vite('resources/js/formulario.js')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
    {{-- dropzone --}}
    @vite('resources/js/dropzone.js')
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    {{-- toastify --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

</head>

<style>
    .nav .a {
        transition: background-color 0.5s ease;
    }
</style>

<body class="flex justify-between items-center">
    <aside class="bg-gray-900 flex-1 h-screen" style="width: 15%;">
        <div class="py-10 flex justify-center gap-2 items-center flex-col">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo Veterinaria" class="rounded-full border-white border-2"
                style="width: 80px; height: 80px;">
            <h1 class="titulo font-extrabold text-3xl text-center">PetShop</h1>
        </div>
        <nav class="flex flex-col nav text-white gap-2 font-semibold text-xl text-center mt-20 py-10">
            @php
                $links = [
                    'Resumen' => 'Panel',
                    'Personal' => 'Personal',
                    'Productos' => 'ProductosAdmin',
                    'Servicios' => 'Servicios',
                ];
                $Titulo = trim($__env->yieldContent('titulo'));
            @endphp

            @foreach ($links as $titulo => $ruta)
                @if ($Titulo == $titulo)
                    <a href="{{ route($ruta) }}" class="p-3 a bg-orange-600">{{ $titulo }}</a>
                @else
                    <a href="{{ route($ruta) }}" class="p-3 a hover:bg-white hover:text-black">{{ $titulo }}</a>
                @endif
            @endforeach
            <a href="/" class="p-3 a hover:bg-white hover:text-black"
                style="border-radius: 0px 200px 200px 0px;">Volver a inicio</a>
        </nav>

    </aside>
    <main id="main" class="h-screen overflow-y-scroll" style="width: 85%;">
        <div class="w-full border-b-2 py-10 p-2 flex gap-5 text-white uppercase font-bold">
            <a href="{{ route('Personal') }}"
                class="w-1/5 h-36 flex justify-center items-center bg-green-600 rounded-sm">
                Personal
            </a>
            <a href="{{ route('ProductosAdmin') }}"
                class="w-1/5 h-36 flex justify-center items-center bg-sky-600 rounded-sm">
                Productos
            </a>
            <a href="{{ route('Personal') }}"
                class="w-1/5 h-36 flex justify-center items-center bg-orange-600 rounded-sm">
                Servicios
            </a>
            <a href="{{ route('Personal') }}"
                class="w-1/5 h-36 flex justify-center items-center bg-gray-800 rounded-sm">
                Solicitude de Veterinarios
            </a>
        </div>
        @yield('contenido')
    </main>
</body>

</html>
