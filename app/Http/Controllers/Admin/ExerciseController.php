<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Exercise;
use App\Models\ExerciseImage;
use Illuminate\Support\Facades\File;

use App\Http\Requests\ExerciseFormRequest;


class ExerciseController extends Controller
{
    //
    public function index()
    {
        $exercises = Exercise::all();
        return view('admin.exercises.index', compact('exercises'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.exercises.create', compact('categories'));
    }

    public function add(ExerciseFormRequest $request)
    {
        $validatedData = $request->validated();

        $category = Category::findOrFail($validatedData['category_id']);
        
        $exercise = $category->exercises()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'small_description' => $validatedData['small_description'],
            'description' => $validatedData['description'],
        ]);

        if($request->hasFile('image')){
            $uploadPath = 'uploads/exercises/';

            $i = 1;
            foreach($request->file('image') as $imageFile){
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $exercise->exerciseImages()->create([
                    'exercise_id' => $exercise->id,
                    'image' => $finalImagePathName,
                ]);
            }
            
        }
        return redirect('exercises')->with('message', 'Exercise Added');
    }

    public function edit(int $exercise_id)
    {
        $categories = Category::all();
        $exercise = Exercise::findOrFail($exercise_id);
        return view('admin.exercises.edit', compact('categories', 'exercise'));
    }
    
    public function update(ExerciseFormRequest $request, int $exercise_id)
    {
        $validatedData = $request->validated();

        $exercise = Category::findOrFail($validatedData['category_id'])->exercises()->where('id',$exercise_id)->first();

        if($exercise)
        {
            $exercise->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'small_description' => $validatedData['small_description'],
                'description' => $validatedData['description'],
            ]);
            
            if($request->hasFile('image')){
                $uploadPath = 'uploads/exercises/';
                
    
                $i = 1;
                foreach($request->file('image') as $imageFile){
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extention;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName = $uploadPath.$filename;
    
                    $exercise->exerciseImages()->create([
                        'exercise_id' => $exercise->id,
                        'image' => $finalImagePathName,
                    ]);
                }
                
            }
            return redirect('exercises')->with('message','Exercise Added');
        }
        else
        {
            return redirect('exercises')->with('message','Exercise not Found');
        }

    }

    public function destroyImage(int $exercise__image_id)
    {
        $exerciseImage = ExerciseImage::findOrFail($exercise__image_id);
        if(File::exists($exerciseImage->image)){
            File::delete($exerciseImage->image);            
        }
        $exerciseImage->delete();
        return redirect('exercises')->with('message','Image Deleted');
    }
    public function delete(int $exercise_id)
    {
        $exercise = Exercise::findOrFail($exercise_id);
        if($exercise->exerciseImages()){
            foreach($exercise->exerciseImages() as $image){
                if(File::exists($image->image)){
                    File::delete($image->image);
                }
            }
        }
    $exercise->delete();
    return redirect()->back()->with('message','Exercise not Found');
    }
}
