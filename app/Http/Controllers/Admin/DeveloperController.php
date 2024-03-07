<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Setting;
use App\Models\Developer;
use Illuminate\Http\Request;
use App\Http\Requests\DeveloperFormRequest;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('admin.developer.index');
    }
    public function create()
    {
        return view('admin.developer.create');
    }
    public function add(DeveloperFormRequest $request)
    {   
        $validatedData = $request->validated();

        $developer = new Developer;
        $developer->name =  $validatedData['name'];
        $developer->position =  $validatedData['position'];
        $developer->description =  $validatedData['description'];

        $uploadPath= 'uploads/developer/';
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/developer/', $filename);
            $developer->image = $uploadPath.$filename;
        }
        $developer->save();
        return redirect('devs')->with('message','Developer added!');
    }
    public function edit(Developer $developer)
    {
        return view('admin.developer.edit', compact('developer'));
    }
    public function update(DeveloperFormRequest $request, $developer)
    {
        $validatedData = $request->validated(); 

        $developer = Developer::findOrFail($developer);

        $developer->name =  $validatedData['name'];
        $developer->position =  $validatedData['position'];
        $developer->description =  $validatedData['description'];

        $uploadPath= 'uploads/developer/';
        if($request->hasFile('image')){

            $path = 'uploads/developer/'.$developer->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/developer/', $filename);
            $developer->image = $uploadPath.$filename;
        }
        $developer->update();
        return redirect('devs')->with('message','Developer Updated!');
    }
    public function delete(int $developer_id)
    {
        $developer = Developer::findOrFail($developer_id);
        $path = 'uploads/developer/'.$developer->image;
            if(File::exists($path)){
                File::delete($path);
            }
    $developer->delete();
    return redirect('devs')->with('message','Developer not Found');
    }
}
