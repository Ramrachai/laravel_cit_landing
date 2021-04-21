<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index(){
        // ====retrieve banner images===
        $banners = Banner::where('status', 1)->get(); 
        // dd($banners);
        return view('frontend.index', compact('banners')); 
    }
}
