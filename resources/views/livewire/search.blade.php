<div class="w-full text-lg">
    <input wire:model='search' wire:keyup='searchProduct' type="text" class="w-full rounded-sm border border-black p-0.5"
        placeholder="Buscar...">
    <div class="w-full relative">
        @if ($lista)
            <div class="bg-gray-900 text-white shadow-md flex flex-col gap-2 w-full absolute z-50 py-5">
                @if (!empty($resultados))
                    @foreach ($resultados as $resultado)
                        <a href="{{ route('show_busqueda',$resultado->id) }}" class="hover:bg-blue-500 h-10 p-2 cursor-pointer flex items-center px-2 gap-2 text-sm">
                            <img src="{{ asset('Productos') . '/' . $resultado->imagen }}"
                                alt="Imagen Producto {{ $resultado->nombre }}" class="w-5 h-5 rounded-full">
                            <p>{{ $resultado->nombre }}</p>
                        </a>
                    @endforeach
                @endif
            </div>
        @endif
    </div>
</div>
