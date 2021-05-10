<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class frontendController extends Controller
{
    public function index(){
        // ====retrieve banner images===
        $banners = Banner::where('status', 1)->get(); 
        $about = About::all(); 
        // dd($banners);
        return view('frontend.index', compact('banners', 'about')); 
    }
}
