<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Stretching;

class StretchingsController extends Controller
{
    public function stretchings()
    {
        $settings = Setting::all();
        $stretchings = Stretching::all();
        return view('frontend.stretchings', compact('settings','stretchings'));
    }
}
