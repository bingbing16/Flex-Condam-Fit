<?php

namespace App\Http\Livewire\Admin\NutCat;

use Livewire\Component;
use App\Models\NutCat;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $nutcast_id;

    public function deleteCategory($nutcast_id)
    {
        $this->$nutcast_id = $nutcast_id;
    }

    public function destroyCategory()
    {
        $nutcast = NutCat::find($this->$nutcast_id);
        $path = 'uploads/nutcat/'.$nutcast_id->image;
        if(File::exists( $path)){
            File::delete( $path);
            
        }
        $nutcast->delete();
    }

    public function render()
    {
        $nutcat = NutCat::orderBy('id','DESC')->paginate(100);
        return view('livewire.admin.nut-cat.index',['nutcat' => $nutcat]);
    }
}
