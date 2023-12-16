<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subir CV - {{ auth()->user()->nombre }}</title>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/a22afade38.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-900 text-white flex justify-center items-center px-10">
    <div class="w-1/2 p-4 border">
        <livewire:subir-c-v/>
    </div>
    <div class="w-1/2 p-4 border flex flex-col">
        <div class="flex flex-col">
            <label for="nombre">Nombres:</label>
            <input type="text" value="{{ auth()->user()->nombre }}" class="text-black">
        </div>
        <div class="flex flex-col">
            <label for="nombre">Apellido:</label>
            <input type="text" value="{{ auth()->user()->apellido }}" class="text-black">
        </div>
        <div class="flex flex-col">
            <label for="nombre">Email:</label>
            <input type="text" value="{{ auth()->user()->email }}" class="text-black">
        </div>
        <div class="flex flex-col">
            <label for="nombre">Telefono:</label>
            <input type="text" value="{{ auth()->user()->telefono }}" class="text-black">
        </div>
        <div class="flex flex-col">
            <label for="nombre">DNI:</label>
            <input type="text" value="{{ auth()->user()->dni }}" class="text-black">
        </div>
    </div>
</body>

</html>
