<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Exercise;


class WorkoutsController extends Controller
{
    public function workouts()
    {
        $settings = Setting::all();
        $categories = Category::all();
        return view('frontend.workouts', compact('settings', 'categories'));
    }
    public function exercises($category_description)
    {
        
        $settings = Setting::all();
        $category = Category::where('description',$category_description)->first();
        if($category){

            $exercised = Exercise::all();
            $settings = Setting::all();
            $exercises = $category->exercises()->get();
            return view('frontend.workouts.index', compact('settings', 'settings', 'category', 'exercises', 'exercised'));
        }
        else{
            return redirect()->back();
        }
    }
}
