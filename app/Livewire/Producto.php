<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Productos;

class Producto extends Component
{
    public function render()
    {
        $productos = Productos::all();
        return view('livewire.producto', ['productos' => $productos]);
    }
}
