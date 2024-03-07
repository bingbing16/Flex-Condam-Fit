<?php

namespace App\Http\Livewire\Admin\Diet;

use Livewire\Component;
use App\Models\Diet;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {
        $diet = Diet::orderBy('id', 'DESC')->paginate(10000);
        return view('livewire.admin.diet.index',['diet' => $diet]);
    }
}
