<?php

namespace App\Http\Controllers;

use App\Models\MainImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainImageController extends Controller
{
    public function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }

    public function index()
    {
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        $mainImages = MainImage::first();
        return view('admin.pages.settings.main_images.index', compact('mainImages', 'user', 'isAdmin'));
    }

    public function edit()
    {
        $mainImage = MainImage::first();
        $user = auth()->user();
        $isAdmin = $user->is_admin ?? false;

        return view('admin.pages.settings.main_images.editmainimages', compact('mainImage', 'user', 'isAdmin'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'banner_image' => 'nullable|image',
            'about_image' => 'nullable|image',
            'menu_image' => 'nullable|image',
            'reservation_image' => 'nullable|image',
        ]);

        $mainImages = \App\Models\MainImage::first();

        $data = [];

        if ($request->hasFile('banner_image')) {
            $path = $request->file('banner_image')->store('main_images', 'public');
            $data['banner_image'] = basename($path);
        } else {
            $data['banner_image'] = $mainImages->banner_image;
        }

        if ($request->hasFile('about_image')) {
            $path = $request->file('about_image')->store('main_images', 'public');
            $data['about_image'] = basename($path);
        } else {
            $data['about_image'] = $mainImages->about_image;
        }

        if ($request->hasFile('menu_image')) {
            $path = $request->file('menu_image')->store('main_images', 'public');
            $data['menu_image'] = basename($path);
        } else {
            $data['menu_image'] = $mainImages->menu_image;
        }

        if ($request->hasFile('reservation_image')) {
            $path = $request->file('reservation_image')->store('main_images', 'public');
            $data['reservation_image'] = basename($path);
        } else {
            $data['reservation_image'] = $mainImages->reservation_image;
        }

        $mainImages->update($data);

       return redirect()->route('main.images')->with('success', 'Images updated successfully');


    }
}
