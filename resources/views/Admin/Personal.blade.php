@extends('Admin.Layout.Panel')

@section('titulo')
Personal
@endsection

@section('contenido')
    <div class="w-full px-2 mt-10">
        <table class="w-full mt-10">
            <thead>
                <tr class="bg-blue-500 text-center text-white text-xl uppercase">
                    <th class="border-white p-2 border">Nombre</th>
                    <th class="border-white p-2 border">Apellidos</th>
                    <th class="border-white p-2 border">dni</th>
                    <th class="border-white p-2 border">telefono</th>
                    <th class="border-white p-2 border">cargo</th>
                    <th class="border-white p-2 border">Fecha Ingreso</th>
                    <th class="border-white p-2 border">Opciones</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @foreach($personal as $pers)
                    <tr>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $pers->nombre }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $pers->apellido }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $pers->dni }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $pers->telefono }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $pers->usuario }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $pers->updated_at->diffForHumans() }}
                        </td>
                        <td class="border-white p-2 border text-2xl text-center font-semibold">
                            <a href="{{ route('delete_product',$pers->id) }}" class="p-1 text-red-700 hover:text-red-500">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
