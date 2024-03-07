<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SettingFormRequest;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }
    public function create()
    {
        return view('admin.setting.create');
    }
    public function add(SettingFormRequest $request)
    {
        $validatedData = $request->validated();

        $setting = new Setting;
        $setting->name = $validatedData['name'];
        $setting->short_name = $validatedData['short_name'];
        $setting->welcome = $validatedData['welcome'];
        $setting->about_us = $validatedData['about_us'];

        $uploadPath= 'uploads/settings/';
        if($request->hasFile('logo'))
        {
            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/settings/', $filename);
            $setting->logo = $uploadPath.$filename;
        }


        $uploadPath= 'uploads/settings-cover/';
        if($request->hasFile('cover'))
        {
            $file = $request->file('cover');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/settings-cover/', $filename);
            $setting->cover = $uploadPath.$filename;
        }
        $setting->save();
        return redirect('setting')->with('message', 'Settings Added');
    }

    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }
    public function update(SettingFormRequest $request, $setting)
    {

        $validatedData = $request->validated();

        $setting = Setting::findOrFail($setting);

        $setting->name = $validatedData['name'];
        $setting->short_name = $validatedData['short_name'];
        $setting->welcome = $validatedData['welcome'];
        $setting->about_us = $validatedData['about_us'];

        $uploadPath= 'uploads/settings/';
        if($request->hasFile('logo'))
        {
            $path = 'uploads/settings/'.$setting->logo;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/settings/', $filename);
            $setting->logo = $uploadPath.$filename;
        }
        

        $uploadPath= 'uploads/settings-cover/';
        if($request->hasFile('cover'))
        {
            $path = 'uploads/settings-cover/'.$setting->cover;
            if(File::exists($path)){
                File::delete($path);
            }

            $file = $request->file('cover');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/settings-cover/', $filename);
            $setting->cover = $uploadPath.$filename;
        }
        $setting->update();
        return redirect('setting')->with('message', 'Settings Updated');
    }
}
