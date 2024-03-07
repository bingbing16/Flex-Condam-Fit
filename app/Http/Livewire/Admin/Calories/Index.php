<?php

namespace App\Http\Livewire\Admin\Calories;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\NutCat;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $nutcast_id;

    public function delCategory($nutcast_id)
    {
        $this->$nutcast_id = $nutcast_id;
    }

    public function desCategory()
    {
        $nutcast = NutCat::find($this->$nutcast_id);
        $path = 'uploads/nutcat/'.$nutcast_id->image;
        if(File::exists($path)){
            File::delete($path);
        }
        $nutcast->delete();
    }

    public function render()
    {
        $nutcat = NutCat::orderBy('id','DESC')->paginate(5);
        return view('livewire.admin.calories.index',['nutcat' => $nutcat]);
    }
}
