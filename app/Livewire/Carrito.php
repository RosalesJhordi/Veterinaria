<?php

namespace App\Livewire;

use Livewire\Component;

class Carrito extends Component
{
    protected $listeners = ['productoSeleccionado'];
    public $productos = [];

    public function productoSeleccionado($producto)
    {
        $this->productos[] = $producto;
    }

    public function render()
    {
        return view('livewire.carrito');
    }
}
