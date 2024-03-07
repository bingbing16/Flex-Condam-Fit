<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Exercise;
use App\Models\NutCat;
use App\Models\Diet;
use App\Models\Setting;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Stretching;



class HomeController extends Controller
{
    //
    public function redirect()
    {
        if(!Auth::user()){
            return redirect()->route('login');
        }
        $role = Auth::user()->role;
        if($role =='1')
        {
            $totalStretching = Stretching::count();
            $totalCategories = Category::count();
            $totalExercises = Exercise::count();
            $totalUser = User::where('role','0')->count();
            $users = User::where('role', '0')->take(1000)->get();
            $totalCalCategories = NutCat::count();
            $totalNutrition = Diet::count();
            return view('admin.dashboard', compact('totalCategories', 'totalExercises', 'totalUser', 'users', 'totalCalCategories', 'totalNutrition', 'totalStretching'));
        }
        else
        {
            $comment = Comment::orderBy('id', 'desc')->get();
            $settings = Setting::all();
            $reply = Reply::all();
            return view('frontend.dashboard', compact('settings', 'comment', 'reply'));
        }
    }
    public function welcome()
        {
            $settings = Setting::all();
            return view('welcome', compact('settings'));
        }
    public function add_comment(Request $request)
    {
        if(Auth::id())
        {
            $comment = new Comment;

            $comment->name = Auth::user()->name;
            $comment->user_id = Auth::user()->id;
            $comment->comment = $request->comment;

            $comment->save();
            return redirect()->back();
        }

        else
        {
            return redirect('login');
        }
    }
    public function add_reply(Request $request)
    {
        if(Auth::id())
        {
             $reply = new Reply;

             $reply->name = Auth::user()->name;
             $reply->user_id = Auth::user()->id;
             $reply->comment_id = $request->commentId;
             $reply->reply = $request->reply;
             $reply->save();

             return redirect()->back();
        }

        else
        {
            return redirect('login');
        }
    }
}
