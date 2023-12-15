<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;

class Search extends Component
{
    public $lista = false; //muestra la lista con sugerencias
    public $search = "";//dato a buscar
    public $resultados;//Almacenar los datos para sugerencia

    //Obtener registros en la busqueda
    public function searchProduct(){
        if(!empty($this->search)){
            $this->resultados = Productos::orderby('nombre', 'asc')
                ->select('*')
                ->where('nombre', 'like', '%' . $this->search . '%')
                ->get();
            $this->lista = true;
        }else{
            $this->lista = false;
        }
    }
    public function render()
    {
        return view('livewire.search');
    }
}
