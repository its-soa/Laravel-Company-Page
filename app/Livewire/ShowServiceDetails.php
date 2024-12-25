<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServiceDetails extends Component
{
    public $service;
    public function mount($id){
        $this->service = Service::findOrfail($id);
        // dd($this->service);
    }

    public function render()
    {
        return view('livewire.show-service-details', ['service' => $this->service]);
    }
}