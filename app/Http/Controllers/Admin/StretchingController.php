<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StretchingFormRequest;
use App\Models\Stretching;
use Illuminate\Support\Facades\File;

class StretchingController extends Controller
{
    public function index()
    {
        return view('admin.stretching.index');
    }
    public function create()
    {
        return view('admin.stretching.create');
    }
    public function add(StretchingFormRequest $request)
    {
        $validatedData = $request->validated();

        $stretching = new Stretching;
        $stretching->name = $validatedData['name'];
        $stretching->description = $validatedData['description'];
        $stretching->sets = $validatedData['sets'];
        $stretching->reps = $validatedData['reps'];

        $uploadPath= 'uploads/stretching/';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/stretching/', $filename);
            $stretching->image = $uploadPath.$filename;
        }
        $stretching->save();
        return redirect('stretching')->with('message','Stretching added!');
    }
    public function edit(Stretching $stretchs)
    {
        return view('admin.stretching.edit', compact('stretchs'));
    }

    public function update(StretchingFormRequest $request, $stretchs)
    {
        $validatedData = $request->validated();

    
        $stretching = Stretching::findOrFail($stretchs);
        $stretching->name = $validatedData['name'];
        $stretching->description = $validatedData['description'];
        $stretching->sets = $validatedData['sets'];
        $stretching->reps = $validatedData['reps'];

        $uploadPath= 'uploads/stretching/';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/stretching/', $filename);
            $stretching->image = $uploadPath.$filename;
        }
        $stretching->update();
        return redirect('stretching')->with('message','Stretching updated');
    }
    public function delete(int $stretchs_id)
    {
        $stretchs = Stretching::findOrFail($stretchs_id);
        $path = 'uploads/stretching/'.$stretchs->image;
            if(File::exists($path)){
                File::delete($path);
            }
    $stretchs->delete();
    return redirect('stretching')->with('message','Stretching deleted');
    }
}
