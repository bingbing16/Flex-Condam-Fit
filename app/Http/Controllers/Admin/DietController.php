<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NutCat;
use App\Models\Diet;
use App\Http\Requests\DietFormRequest;
use Illuminate\Support\Facades\File;


class DietController extends Controller
{
    public function index()
    {
        return view('admin.diet.index');
    }
    public function create()
    {
        $calories = NutCat::all();
        return view('admin.diet.create', compact('calories'));
    }
    public function add(DietFormRequest $request)
    {
        $validatedData = $request->validated();

        $diet = new Diet;

        $diet->category_id = $validatedData['category_id'];
        $diet->name = $validatedData['name'];
        $diet->name = $validatedData['name'];
        $diet->bfast = $validatedData['bfast'];
        $diet->lunch = $validatedData['lunch'];
        $diet->snack = $validatedData['snack'];
        $diet->dinner = $validatedData['dinner'];
        $diet->midsnack = $validatedData['midsnack'];
        $diet->totalcalories = $validatedData['totalcalories'];

        $uploadPath= 'uploads/diet/';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/diet/', $filename);
            $diet->image = $uploadPath.$filename;
        }
        $diet->save();
        return redirect('nutrition')->with('message','Category added!');
    }
    public function edit(Diet $diets)
    {
        $calories = NutCat::all();
        return view('admin.diet.edit', compact('diets', 'calories'));
    }
    public function update(DietFormRequest $request, $diets)
    {
        $validatedData = $request->validated();
        
        $diets = Diet::findOrFail($diets);
        
        $diets->category_id = $validatedData['category_id'];
        $diets->name = $validatedData['name'];
        $diets->bfast = $validatedData['bfast'];
        $diets->lunch = $validatedData['lunch'];
        $diets->snack = $validatedData['snack'];
        $diets->dinner = $validatedData['dinner'];
        $diets->midsnack = $validatedData['midsnack'];
        $diets->totalcalories = $validatedData['totalcalories'];

        $uploadPath= 'uploads/diet/';
        $path = 'uploads/diet/'.$diets->image;
        if($request->hasFile('image')){
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/diet/', $filename);
            $diets->image = $uploadPath.$filename;
        }
        $diets->update();
        return redirect('nutrition')->with('message','Category updated!');
    }
    public function delete(int $diets_id)
    {
        $diets = Diet::findOrFail($diets_id);
        $path = 'uploads/diet/'.$diets->image;
            if(File::exists($path)){
                File::delete($path);
            }
    $diets->delete();
    return redirect('nutrition')->with('message','Diet Plan not Found');
    }
}