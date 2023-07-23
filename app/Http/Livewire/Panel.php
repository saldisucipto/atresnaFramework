<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PanelUtama;

class Panel extends Component
{

    public $dataPanel;

    public function mount()
    {
        $this->dataPanel = PanelUtama::get();
    }


    public function render()
    {
        return view('livewire.panel');
    }
}
