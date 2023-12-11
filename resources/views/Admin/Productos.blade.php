@extends('Admin.Layout.Panel')

@section('titulo')
Productos
@endsection

@section('contenido')
<div class="shadow-md z-50 border-black bg-white flex shadow-black rounded-md fixed" id="formulario">
    <i class="fa-solid fa-x text-2xl cursor-pointer hover:text-red-500 p-2 absolute right-1 top-1" id="close-formulario"></i>
    <form action="" class="w-1/2 h-full border">Imagen aqui</form>
    <form action="" class="flex flex-col gap-5">
        <div>
            Nombre de producto
            <input type="text" name="" id="">
        </div>
        <div>
            Nombre de producto
            <input type="text" name="" id="">
        </div>
        <div>
            Nombre de producto
            <input type="text" name="" id="">
        </div>
        <div>
            Nombre de producto
            <input type="text" name="" id="">
        </div>
        <div>
            Nombre de producto
            <input type="text" name="" id="">
        </div>
    </form>
</div>
<div class="w-full px-2 mt-10">
    <div id="btn-formulario" class=" cursor-pointer bg-lime-500 text-white font-bold w-1/6 h-24 rounded-md flex justify-center items-center gap-5">
        <span class="p-3 bg-white rounded-full text-black text-xl w-10 h-10 flex justify-center">
            <i class="fa-solid fa-plus"></i>
        </span>
        <span class="">
            Agregar Productos
        </span>
    </div>
</div>
@endsection
