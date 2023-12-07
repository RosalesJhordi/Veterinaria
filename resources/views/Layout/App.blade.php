<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinaria</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="selection:bg-white selection:text-orange-600">
    <header class="shadow-md p-2 px-20 flex justify-between items-center">
        <div class="flex gap-2 items-center">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo Veterinaria" class="w-14">
            <h1 class="titulo font-extrabold text-3xl">PetShop</h1>
        </div>
        <nav class="uppercase font-extrabold  text-gray-400 flex gap-10">
            <a href="/" class="hover:text-black border-b-2 border-transparent hover:border-black">inicio</a>
            <a href="Servicios" class="hover:text-black border-b-2 border-transparent hover:border-black">servicios</a>
            <a href="Productos" class="hover:text-black border-b-2 border-transparent hover:border-black">Productos</a>
            <a href="Sobre-nosotros" class="hover:text-black border-b-2 border-transparent hover:border-black">sobre nosotros</a>
        </nav>
        <div>
            <a href="" class="text-2xl text-gray-400 hover:text-black">
                <i class="fa-solid fa-right-to-bracket"></i>
            </a>
        </div>
    </header>
    <main class="px-20">
        <h2 class="p-2 text-md font-semibold">PetShop/@yield('titulo')</h2>
        @yield('contenido')
    </main>
    <footer class="w-full absolute bottom-0 p-2 text-center bg-gray-300">
        <h2 class="font-bold text-xl">Derechos reservados Jhon R</h2>
    </footer>
</body>
</html>
