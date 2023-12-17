<?php

namespace App\Livewire;

use App\Models\Curriculums;
use PDF;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class SubirCV extends Component
{
    public $cv;
    use WithFileUploads;
    protected $rules = [
        'cv' => 'required|mimes:pdf|max:10240',
    ];

    public function postular()
    {
        $datos = $this->validate([
            'cv' => 'required|mimes:pdf|max:10240',
        ]);

        $nombreArchivo = uniqid('cv_') . '.' . $datos['cv']->getClientOriginalExtension();
        $cvPath = $datos['cv']->storeAs('public/cvs', $nombreArchivo);

        if ($cvPath) {
            session()->flash('success', 'CV subido con éxito, Suerte!');
            $nuevoCurriculum = new Curriculums([
                'user_id' => auth()->user()->id,
                'cv' => $nombreArchivo,
            ]);
            auth()->user()->curriculum()->save($nuevoCurriculum);
            $this->reset('cv');

        } else {
            session()->flash('error', '¡Error al subir el CV!');
        }
    }




    public function render()
    {
        return view('livewire.subir-c-v');
    }
}
