<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class bannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::latest()->paginate(5); 
        return view('backend.banner.index', compact('banners')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->image); 
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg,webp|max:2000'
        ]); 

       $newName = uniqid()."_banner." . $request->image->extension(); 

        $saveInDrive = $request->image->move(public_path('images'), $newName);
        $saveInDB = Banner::insert([
            'image' => $newName,
            'created_at' => Carbon::now()
        ]); 
        if($saveInDrive && $saveInDB){
            return Redirect('/banner')->with('message', 'Image uploaded successfully'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $info = Banner::where('id', $id)->first(); 
        // dd($info); 
        return view('backend.banner.show', compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $info = Banner::where('id', $id)->first(); 
        $img = $info->image; 
        $image_path = public_path('images')."/".$img; 

        if ( $info->forceDelete() && unlink($image_path)) {
            return Redirect('banner')->with('message', 'Banner deleted successfully');
        } else {
            return Redirect('banner')->with('message', 'Opps ! unable to delete ');
        }
       
        
    }
}
