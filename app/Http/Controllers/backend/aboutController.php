<?php

namespace App\Http\Controllers\backend;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class aboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1); 
        // dd($about->id);
        $id = $about->id;
        $title = $about->title;
        $description = $about->description;
        $image = $about->image;
        return view('backend.about.index' , compact('id', 'title', 'description', 'image')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        // dd($request->image); 
        
        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg,webp|max:2000',
            'title'=>'required',
            'description'=>'required'
        ]); 
            
       $newName = uniqid()."_about." . $request->image->extension(); 
       $saveInDrive = $request->image->move(public_path('images'), $newName);
       if($saveInDrive) {
           //delete previous photo from image folder 
           $getPreviousPhotoName = About::find(1)->image;
           $image_path = public_path('images')."\\".$getPreviousPhotoName; 
           $deletePreviousPhoto = unlink($image_path);
       }
    
        $saveInDB = DB::table('abouts')
                        ->where('id', 1)
                        ->update([
                            'title' => $request->title, 
                            'description' => $request->description, 
                            'image'=> $newName
                        ]); 

        if($saveInDrive && $saveInDB){
            return Redirect('/about')->with('message', 'Updated Sucessfully'); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
