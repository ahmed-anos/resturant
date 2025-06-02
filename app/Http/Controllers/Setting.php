<?php

namespace App\Http\Controllers;

use App\Models\Setting as ModelsSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Setting extends Controller
{
     private function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }
    public function index(){
         $isAdmin = $this->GetIsAdmin();
        $data = $isAdmin === true ? ModelsSetting::all() : null;
        $user = Auth::id() ? Auth::user() : null;
        $setting = ModelsSetting::where('id' ,1)->first();
        return view('admin.pages.settings.setting'  ,compact("data", "isAdmin",'user' ,'setting'));
    }

        public function edit()
    {
        $data = ModelsSetting::where('id' ,1)->first();
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        return view("admin.pages.settings.editsetting", compact("data", "user", "isAdmin"));
    }

public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'email' => 'required|email|max:255',
        'phone' => 'nullable|array',
        'phone.*' => 'nullable|string|max:20',
        'description' => 'nullable|string',
        'about_desc_first' => 'required|string',
        'about_desc_second' => 'required|string',
        'social_links' => 'required|array',
    ]);

    $setting = ModelsSetting::where('id', 1)->first();

    if ($request->hasFile('logo')) {
        // if ($setting->logo && Storage::disk('public')->exists($setting->logo)) {
        //     Storage::disk('public')->delete($setting->logo);
        // }
        // $path = $request->file('logo')->store('logo', 'public');
        $logoPath = $request->file('logo')->store('logo', 'public');
        $setting->logo = $logoPath;
    }
    else{
        $setting->logo = $request->logo;
    }

    $setting->name = $request->filled('name') ? $request->name : $setting->name;
    $setting->email = $request->filled('email') ? $request->email : $setting->email;
    $setting->phone = $request->has('phone') ? json_encode($request->phone) : $setting->phone;
    $setting->description = $request->filled('description') ? $request->description : $setting->description;
    $setting->about_desc_first = $request->filled('about_desc_first') ? $request->about_desc_first : $setting->about_desc_first;
    $setting->about_desc_second = $request->filled('about_desc_second') ? $request->about_desc_second : $setting->about_desc_second;
    $setting->social_links = $request->has('social_links') ? json_encode($request->social_links) : $setting->social_links;

    $setting->save();

    return redirect()->back()->with('success', 'تم تحديث الإعدادات بنجاح');
}




}
