<?php

namespace App\Http\Livewire\Admin\Setting;

use Livewire\Component;
use Livewire\WithPagination; 
use App\Models\Setting;

class Index extends Component
{
    use WithPagination;
    protected $paginationThme = 'bootstrap';
    public function render()
    {
        $settings = Setting::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.setting.index',['settings' => $settings]);
    }
}
