<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Comment;
use App\Models\Reply;

class AboutUsController extends Controller
{
    public function aboutus()
    {
        $settings = Setting::all();
        $comment = Comment::orderBy('id', 'desc')->get();
        $reply = Reply::all();
        return view('frontend.aboutus', compact('settings','comment','reply'));
    }
}
