<?php

namespace App\Livewire;

use Livewire\Component;

class Notification extends Component
{
    public $message;

    protected $listeners = ['notify'];

    public function notify($message)
    {
        $this->message = $message;
        $this->dispatchBrowserEvent('show-notification');
    }
    public function render()
    {
        return view('livewire.notification');
    }
}
