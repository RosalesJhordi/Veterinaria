<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Productos;

class Products extends Component
{
    public $productoSeleccionado;

    public function seleccionarProducto($id)
    {
        $producto = Productos::find($id);
        $this->productoSeleccionado = $producto;

        // Emitir el evento con el nombre ajustado
        // $this->emit('productoSeleccionado', $producto);
        $this->dispatch('productoSeleccionado', $producto);

    }
    public function render()
    {
        $productos = Productos::paginate(10);
        return view('livewire.products', ['productos' => $productos]);
    }
}
