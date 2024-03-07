<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Diet;
use App\Models\NutCat;

class FoodController extends Controller
{
    public function food()
    {
        $settings = Setting::all();
        $categories = NutCat::all();
        return view('frontend.food', compact('settings', 'categories'));
    }
    
    public function calories($category_name)
    {
        $settings = Setting::all();
        $category = NutCat::where('name',$category_name)->first();
        if($category){

            $foods = Diet::all();
            $food = $category->calories()->get();
            return view('frontend.food.index', compact('settings', 'foods', 'food', 'category'));

        }else{
            return redirect()->back();
        }
    }
}
