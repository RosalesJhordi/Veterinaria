<div class="flex gap-2">
    @foreach ($productos as $producto)
        <div class="bg-white">
            <p>{{ $producto['nombre'] }}</p>
            <p>{{ $producto['precio'] }}</p>
        </div>
    @endforeach
</div>
