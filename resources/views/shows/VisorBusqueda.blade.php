@if (!empty($busqueda))
    @extends('Layout.App')

    @section('titulo')
        {{ $busqueda->nombre }}
    @endsection

    @section('contenido')
        <div class="px-20 flex justify-center items-center py-20">
            <div class="shadow-md flex justify-between w-1/2">
                <img src="{{ asset('Productos') . '/' . $busqueda->imagen }}" alt="Imagen Producto {{ $busqueda->nombre }}" class="w-1/2">
                <div class="w-1/2 bg-gray-100 px-10 relative">
                    <h1 class="text-center py-5 font-semibold uppercase text-xl">{{ $busqueda->nombre }}</h1>
                    <p class="py-10 uppercase text-sm text-gray-500 font-bold">{{ $busqueda->descripcion }}</p>
                    <div class="flex w-full flex-col justify-end gap-2">
                        <span class="flex justify-between font-bold uppercase">
                            Ahora: <h1 class="border border-green-600 bg-green-200 text-green-600 w-20 rounded-full text-center">
                                S/. {{ $busqueda->precio - ($busqueda->precio * ($busqueda->descuento ?? 0)) / 100 }}
                            </h1>
                        </span>
                        <span class="flex justify-between font-bold uppercase">
                            Antes: <h1 class="line-through border border-red-600 bg-red-200 text-red-600 rounded-full w-20 text-center">
                                S/. {{ $busqueda->precio }}
                            </h1>
                        </span>
                    </div>
                    <div class="flex mt-2 justify-start py-10 items-center">
                        <p class="font-bold text-sm uppercase">Le gusta a {{ $busqueda->likes->count() }}</p>
                    </div>
                    <div class="w-full absolute bottom-2 left-0 flex justify-center items-center">
                        <button
                            class="bg-blue-500 hover:bg-blue-600 text-white p-1.5 w-80 rounded-sm uppercase font-semibold">
                            Añadir al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
