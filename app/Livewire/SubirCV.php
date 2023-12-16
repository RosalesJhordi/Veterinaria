<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use PDF;
class SubirCV extends Component
{
    public $cv;
    use WithFileUploads;
    protected $rules = [
        'cv' => 'required|mimes:pdf|max:10240',
    ];

    public function postular()
    {
        $this->validate();

        // Almacenar el archivo en el disco
        $cvPath = $this->cv->store('public/cvs');
        $datos['imagen'] = str_replace('public/cvs/', '',$cvPath);


        session()->flash('success', '¡CV subido con éxito!');
    }

    public function render()
    {
        return view('livewire.subir-c-v');
    }
}
