<?php

namespace App\Http\Livewire\Admin\Stretching;
use App\Models\Stretching;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $stretching = Stretching::all();
        return view('livewire.admin.stretching.index',['stretching' => $stretching]);
    }
}
