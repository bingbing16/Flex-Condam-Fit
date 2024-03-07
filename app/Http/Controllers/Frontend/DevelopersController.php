<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Developer;

class DevelopersController extends Controller
{
    public function developer()
    { 
        $settings = Setting::all();
        $developer = Developer::all();
        return view('frontend.developer', compact('settings','developer'));
    }
}
