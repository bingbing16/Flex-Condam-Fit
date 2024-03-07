<?php

namespace App\Http\Livewire\Admin\Developer;

use Livewire\Component;
use App\Models\Developer;

class Index extends Component
{
    public function render()
    {
        $developer = Developer::all();
        return view('livewire.admin.developer.index',['developer' => $developer]);
    }
}
