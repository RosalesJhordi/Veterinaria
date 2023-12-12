@extends('Admin.Layout.Panel')

@section('titulo')
Personal
@endsection

@section('contenido')
    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 5000,
                close: true,
                gravity: "top",
                position: 'right',
                backgroundColor: "#3CFC32",
                stopOnFocus: true,
            }).showToast();
        </script>
    @endif
    <div class="shadow-md z-50 border-black bg-white flex shadow-black rounded-md fixed" id="formulario">
        <i class="fa-solid fa-x text-2xl cursor-pointer hover:text-red-500 p-2 absolute right-1 top-1"
            id="close-formulario"></i>
        <div class="w-1/2 bg-gray-200 h-full border flex justify-center items-center px-10">
            <form action="{{ route('Imagen.store') }}" id="dropzone" method="POST" enctype="multipart/form-data"
                class="dropzone w-96 h-80 rounded-md flex justify-center shadow-md items-center">
                @csrf
            </form>
        </div>
        <form action="{{ route('GuardarProductos') }}" method="POST" class="flex flex-col w-1/2 items-center gap-5">
            @csrf
            <p class="py-5 text-lg">Para Agregar un producto nuevo completa los datos</p>
            <div
                class="border border-blue-700 rounded-sm w-96 p-1.5 text-xl focus-within:ring-1 focus-within:ring-blue-500">
                <span class="px-2">
                    <i class="fa-solid fa-basket-shopping"></i>
                </span>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre de Producto"
                    class="h-full w-80 outline-none" value={{ old('nombre') }}>
            </div>
            @if ($errors->has('nombre'))
                <script>
                    const div = document.getElementById("formulario");
                    Toastify({
                        text: "{{ $errors->first('nombre') }}",
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#f00",
                        stopOnFocus: true,
                    }).showToast();
                    div.style.transform = 'translateY(0px)';
                </script>
            @endif
            <div
                class="border border-blue-700 rounded-sm w-96 p-1.5 text-xl focus-within:ring-1 focus-within:ring-blue-500">
                <span class="px-2">
                    <i class="fa-solid fa-tags"></i>
                </span>
                <select id="categoria" name="categoria" class="w-80 outline-none cursor-pointer"
                    value={{ old('categoria') }}>
                    <option disabled selected class="text-gray-400">Selecciona una Categoria</option>
                    <option value="Ropa y Accesorios">Ropa y Accesorios</option>
                    <option value="Electrónica">Electrónica</option>
                    <option value="Hogar y Jardín">Hogar y Jardín</option>
                    <option value="Salud y Belleza">Salud y Belleza</option>
                    <option value="Alimentos y Bebidas">Alimentos y Bebidas</option>
                    <option value="Deportes y Aire Libre">Deportes y Aire Libre</option>
                    <option value="Electrodomésticos">Electrodomésticos</option>
                    <option value="Juguetes y Entretenimiento">Juguetes y Entretenimiento</option>
                </select>
            </div>
            @if ($errors->has('categoria'))
                <script>
                    const div = document.getElementById("formulario");
                    Toastify({
                        text: "{{ $errors->first('categoria') }}",
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#f00",
                        stopOnFocus: true,
                    }).showToast();
                    div.style.transform = 'translateY(0px)';
                </script>
            @endif
            <div
                class="border border-blue-700 w-96 flex items-center rounded-sm p-1.5 text-xl focus-within:ring-1 focus-within:ring-blue-500">
                <span class="px-2">
                    <i class="fa-regular fa-rectangle-list"></i>
                </span>
                <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion de producto"
                    class="h-8  w-80 outline-none" value={{ old('descripcion') }}></textarea>
            </div>
            @if ($errors->has('descripcion'))
                <script>
                    const div = document.getElementById("formulario");
                    Toastify({
                        text: "{{ $errors->first('descripcion') }}",
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#f00",
                        stopOnFocus: true,
                    }).showToast();
                    div.style.transform = 'translateY(0px)';
                </script>
            @endif
            <div
                class="border border-blue-700 rounded-sm w-96 p-1.5 text-xl focus-within:ring-1 focus-within:ring-blue-500">
                <span class="px-2">
                    <i class="fa-solid fa-money-bill-1"></i>
                </span>
                <input type="number" name="precio" id="precio" placeholder="Precio Unitario"
                    class="h-full w-80 outline-none" value={{ old('precio') }}>
            </div>
            @if ($errors->has('precio'))
                <script>
                    const div = document.getElementById("formulario");
                    Toastify({
                        text: "{{ $errors->first('precio') }}",
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: 'right',
                        backgroundColor: "#f00",
                        stopOnFocus: true,
                    }).showToast();
                    div.style.transform = 'translateY(0px)';
                </script>
            @endif
            <div
                class="border border-blue-700 rounded-sm w-96 p-1.5 text-xl focus-within:ring-1 focus-within:ring-blue-500">
                <span class="px-2">
                    <i class="fa-solid fa-percent"></i>
                </span>
                <input type="number" name="descuento" id="descuento" placeholder="Descuento de producto"
                    class="h-full w-80 outline-none" value={{ old('descuento'), 0 }}>
            </div>
            <div class="mt-5">
                <input type="hidden" name="imagen" value="{{ old('imagen') }}">
            </div>
            <div class="bg-blue-500 mt-1 w-96 p-2 rounded-md font-bold cursor-pointer text-white flex items-center">
                <input type="submit" value="Agregar"
                    class="bg-blue-500 uppercase w-96 rounded-lg font-bold cursor-pointer text-white">
                <span class="px-5">
                    <i class="fa-solid fa-plus"></i>
                </span>
            </div>
        </form>
    </div>
    <div class="w-full px-2 mt-10">
        <div id="btn-formulario"
            class=" cursor-pointer bg-sky-500 text-white font-bold w-1/6 h-24 rounded-md flex justify-center items-center gap-5">
            <span class="p-3 bg-white rounded-full text-black text-xl w-10 h-10 flex justify-center">
                <i class="fa-solid fa-plus"></i>
            </span>
            <span class="">
                Agregar Personal
            </span>
        </div>
        <table class="w-full mt-10">
            <thead>
                <tr class="bg-blue-500 text-center text-white text-xl uppercase">
                    <th class="border-white p-2 border">Nombre</th>
                    <th class="border-white p-2 border">Apellidos</th>
                    <th class="border-white p-2 border">dni</th>
                    <th class="border-white p-2 border">telefono</th>
                    <th class="border-white p-2 border">PERFIL</th>
                    <th class="border-white p-2 border">cargo</th>
                    <th class="border-white p-2 border">Fecha Ingreso</th>
                    <th class="border-white p-2 border">Opciones</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @foreach($productos as $producto)
                    <tr>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $producto->nombre }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $producto->categoria }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $producto->precio }}
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            @if ($producto->descuento == null)
                                0%
                            @else
                                {{ $producto->descuento }}%
                            @endif
                        </td>
                        <td class="border-white p-2 flex justify-center items-center border text-center font-semibold">
                            <img src="{{asset('Productos') . '/' . $producto->imagen}}" alt="Imagen Producto {{$producto->nombre}}" class="w-10">
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            veterinario
                        </td>
                        <td class="border-white p-2 border text-center font-semibold">
                            {{ $producto->created_at->diffForHumans() }}
                        </td>
                        <td class="border-white p-2 border text-2xl text-center font-semibold">
                            <a href="" class="p-1 text-green-700 hover:text-green-500">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <a href="{{ route('delete_product',$producto->id) }}" class="p-1 text-red-700 hover:text-red-500">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
