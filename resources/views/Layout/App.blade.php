<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinaria</title>
    @vite('resources/css/app.css')
    @vite('resources/css/media.css')
    @vite('resources/js/menu.js')
    @vite('resources/js/app.js')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>
<body class="selection:bg-white selection:text-orange-600">
    <div class="fixed z-50 justify-center items-center w-full bg-gray-800 h-screen" id="menu">
        <div class="flex flex-col justify-center mt-20 items-center gap-5 text-white uppercase font-extrabold text-2xl">
            <a href="/" class="border-b-2 border-transparent hover:border-white">inicio</a>
            <a href="Servicios" class="border-b-2 border-transparent hover:border-white">servicios</a>
            <a href="Productos" class="border-b-2 border-transparent hover:border-white">Productos</a>
            <a href="Sobre-nosotros" class="border-b-2 border-transparent hover:border-white">sobre nosotros</a>
            <a href="Sobre-nosotros" class="border-b-2 border-transparent hover:border-white">Crear Cuenta</a>
            <a href="Sobre-nosotros" class="border-b-2 border-transparent hover:border-white">Iniciar sesion</a>
        </div>
        <div class="flex justify-center items-center mt-20">
            <i class="fa-solid fa-x cursor-pointer text-white text-2xl" id="close-menu-btn"></i>
        </div>
    </div>
    <header class="shadow-md header p-2 px-20 flex justify-between items-center">
        <div class="flex gap-2 items-center logo">
            <img src="{{ asset('img/logo.jpg') }}" alt="Logo Veterinaria" class="w-14">
            <h1 class="titulo font-extrabold text-3xl">PetShop</h1>
        </div>
        <nav class="uppercase font-extrabold nav  text-gray-400 flex gap-10">
            <a href="/" class="hover:text-black border-b-2 border-transparent hover:border-black">inicio</a>
            <a href="Servicios" class="hover:text-black border-b-2 border-transparent hover:border-black" id="servi">servicios</a>
            <a href="Productos" class="hover:text-black border-b-2 border-transparent hover:border-black" id="product">Productos</a>
            <a href="Sobre-nosotros" class="hover:text-black border-b-2 border-transparent hover:border-black" id="sb">sobre nosotros</a>
        </nav>
        <div class="uppercase font-extrabold opciones text-gray-400 flex gap-2" id="sesion">
            @if (auth()->user())
                hola: {{auth()->user()->nombre}}
            @else
                <a href="{{ route('Registro') }}" class="hover:text-black border-b-2 border-transparent hover:border-black">Crear Cuenta</a>|
                <a href="{{ route('Login') }}" class="hover:text-black border-b-2 border-transparent hover:border-black">Iniciar sesion</a>
            @endif
        </div>
        <i class="fa-solid fa-bars text-xl cursor-pointer" id="menu-btn"></i>
    </header>
    <main class="px-20 relative">
        <h2 class="p-2 text-md font-semibold">PetShop/@yield('titulo')</h2>
        @yield('contenido')
        @auth
        @if (auth()->user()->email == "yhordiyhom65@gmail.com")
        <a href="{{ route('Panel') }}">
            <div id="btn-panel" class="bg-orange-600  fixed right-0 bottom-96 h-1/6 px-10 p-2 flex items-center justify-center gap-2" style="border-radius: 200px 0px 10px 200px;
            -moz-border-radius: 200px 0px 10px 200px;
            -webkit-border-radius: 200px 0px 10px 200px;
            border: 0px solid #000000;">
                <img src="{{ asset('img/panel-admin.jpg') }}" alt="Panel img" class="w-20 rounded-full">
                <h1 class="text-white font-extrabold text-2xl">Administrar</h1>
            </div>
        </a>
        @endif
        @endauth
    </main>
    <footer class="w-full footer flex gap-10 justify-center items-center p-2 text-center bg-gray-300">
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15719.773862222859!2d-76.2363243!3d-9.938662099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a7c2e25c51eee9%3A0x791adbfd296fbb35!2sPlaza%20de%20Armas%20de%20Hu%C3%A1nuco!5e0!3m2!1ses-419!2spe!4v1701913384330!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div>
            Ubicanos:
            <p>
                Lorem ipsum dolor sit amet.
            </p>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            Informacion:
            <P>Lorem ipsum dolor sit.</P>
            <P>Lorem ipsum dolor sit.</P>
            <P>Lorem ipsum dolor sit.</P>
        </div>
    </footer>
</body>
</html>
