@extends('Layout.App')

@section('titulo')
    Login
@endsection

@section('contenido')
    <div class="w-full py-48 flex justify-center">
        <div class="border shadow-xl" style="height: auto; width: 30%;">
            <form action="{{ route('Login') }}" method="POST" novalidate class="p-2 px-10">
                @csrf
                <h1 class="text-center text-3xl py-10 font-bold uppercase">Inicia sesion</h1>

                @if (session('mensaje'))
                    <p class="border border-red-600 text-red-600 font-extrabold bg-red-200 text-md my-2 rounded-sm p-2 text-center">{{ session('mensaje') }}</p>
                @endif
                <div
                    class="border border-green-700 flex justify-between rounded-sm mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-green-500 focus-within:text-green-600 focus-within:bg-green-100">
                    <span class="px-2">
                        <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input type="email" name="email" id="email" autocomplete="email" placeholder="Email"
                        class="h-full outline-none w-96 bg-transparent" value="{{ old('email') }}">
                </div>
                @error('email')
                    <p class="border border-red-600 text-red-600 font-extrabold bg-red-200 text-sm my-2 rounded-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <div
                    class="border border-green-700 flex justify-between rounded-sm mt-5 p-2 text-xl focus-within:ring-2 focus-within:ring-green-500 focus-within:text-green-600 focus-within:bg-green-100">
                    <span class="px-2">
                        <i class="fa-solid fa-unlock"></i>
                    </span>
                    <input type="password" name="password" id="password" autocomplete="password" placeholder="Contraseña"
                        class="h-full outline-none w-96 bg-transparent">
                </div>
                @error('password')
                    <p class="border border-red-600 text-red-600 font-extrabold bg-red-200 text-sm my-2 rounded-sm p-2 text-center">{{ $message }}</p>
                @enderror

                <div class="py-10 flex justify-center">
                    <button type="submit"
                        class="bg-blue-500 p-2 w-1/2  rounded-sm hover:bg-blue-700 uppercase font-bold text-white">Iniciar
                        sesion</button>
                </div>
            </form>
        </div>
    </div>
@endsection
