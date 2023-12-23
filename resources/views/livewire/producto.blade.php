<div class="w-full flex px-5 py-5 flex-wrap gap-5">
    @foreach ($productos as $producto)
        <div class="w-72 relative h-96 border-gray-200 bg-gray-100 border shadow-md rounded-md">
            <a href="{{ route('show_busqueda', $producto->id) }}">
                <img src="{{ asset('Productos') . '/' . $producto->imagen }}"
                    alt="Imagen Producto {{ $producto->nombre }}" class="w-full h-64">
            </a>
            <div class="flex justify-between px-2 uppercase font-bold p-2">
                <h1 class="">{{ $producto->nombre }}</h1>
                @if ($producto->descuento != null || $producto->descuento != 0)
                    <h1 class="border border-green-600 bg-green-200 text-green-600 w-20 rounded-full text-center">
                        S/. {{ $producto->precio - ($producto->precio * ($producto->descuento ?? 0)) / 100 }}
                    </h1>
                @else
                    <h1 class="border border-green-600 bg-green-200 text-green-600 w-20 rounded-full text-center">
                        S/. {{ $producto->precio }}</h1>
                @endif
            </div>
            @if ($producto->descuento != null || $producto->descuento != 0)
                <div class="flex justify-end absolute top-0 font-extrabold text-xl">
                    <h1 class=" border border-red-600 bg-red-200 text-red-600 w-20 p-1 text-center">
                        -{{ $producto->descuento }}%</h1>
                </div>
            @endif
            <form action="{{ route('likes', $producto) }}" method="POST">
                @csrf
                @if (auth()->check())
                    <button type="submit"
                        class="flex justify-end absolute top-0 right-0 text-gray-300 cursor-pointer hover:text-red-500 bg-white p-2 font-extrabold text-xl"
                        style="border-radius: 200px 0px 200px 200px;">
                        @if ($producto->likedBy->contains(auth()->user()))
                            <i class="fa-solid fa-heart text-red-600"></i>
                        @else
                            <i class="fa-solid fa-heart"></i>
                        @endif
                    </button>
                @else
                    <a href="{{ route('Login') }}"
                        class="flex justify-end absolute top-0 right-0 text-gray-300 cursor-pointer hover:text-red-500 bg-white p-2 font-extrabold text-xl"
                        style="border-radius: 200px 0px 200px 200px;">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                @endif
            </form>
            @if ($producto->descuento != null || $producto->descuento != 0)
                <div class="flex justify-between px-2 mt-2 items-center">
                    <p class="font-bold text-sm">A {{ $producto->likes->count() }} le gusta</p>
                    <h1
                        class="line-through border border-red-600 bg-red-200 text-red-600 rounded-full w-20 text-center font-bold">
                        S/. {{ $producto->precio }}
                    </h1>
                </div>
            @else
                <div class="flex mt-2 justify-start px-2 items-center">
                    <p class="font-bold text-sm">A {{ $producto->likes->count() }} le gusta</p>
                </div>
            @endif
            <div class="w-full absolute bottom-0 flex justify-center items-center">
                <button class="bg-blue-500 hover:bg-blue-600 text-white p-1.5 w-80 rounded-sm uppercase font-semibold"
                    wire:click="addToCart({{ $producto->id }})">
                    Añadir al carrito
                </button>

            </div>
        </div>
    @endforeach
</div>
