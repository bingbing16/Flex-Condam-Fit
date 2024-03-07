<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NutCatRequest;
use App\Models\NutCat;
use Illuminate\Support\Facades\File;

class NutrCatController extends Controller
{
    public function index()
    {
        return view('admin.nutcat.index');
    }
    public function create()
    {
        return view('admin.nutcat.create');
    }
    public function add(NutCatRequest $request)
    {
        $validatedData = $request->validated();

        $catnut = new NutCat;
        $catnut->name = $validatedData['name'];
        $catnut->description = $validatedData['description'];

        $uploadPath= 'uploads/nutcat/';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/nutcat/', $filename);
            $catnut->image = $uploadPath.$filename;
           
        }
        $catnut->save();
        return redirect('nutrition-category')->with('message','Category added!');
    }
    public function edit(NutCat $nutcast)
    {
        return view('admin.nutcat.edit', compact('nutcast'));
    }
    public function update(NutCatRequest $request, $nutcast)
    {

        $validatedData = $request->validated();

        $nutcast = NutCat::findOrFail($nutcast);
        $nutcast->name = $validatedData['name'];
        $nutcast->description = $validatedData['description'];

        $uploadPath= 'uploads/nutcat/';
        if($request->hasFile('image')){
            $path = 'uploads/nutcat/'.$nutcast->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/nutcat/', $filename);
            $nutcast->image = $uploadPath.$filename;
           
        }
        $nutcast->update();
        return redirect('nutrition-category')->with('message','Category updated!');
    }
    public function delete(int $nutcast_id)
    {
        $nutcast = NutCat::findOrFail($nutcast_id);
        $path = 'uploads/nutcat/'.$nutcast->image;
            if(File::exists($path)){
                File::delete($path);
            }
    $nutcast->delete();
    return redirect()->back()->with('message','Exercise not Found');
    }
}
