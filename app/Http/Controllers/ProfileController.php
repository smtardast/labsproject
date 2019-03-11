<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Storage;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {  
        return view('profile.profile', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile.profile-edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
     $profile->job=$request->job;
     $profile->image=$request->image->store('','profile');
     $path=Storage::disk('profile')->path($profile->image);
     $img=Image::make($path)->resize(200, 260);
     $img->save(); 

     if ($profile->save()) {
        
        return redirect()->back()->with([
            'message' => 'success',
            'textmessage' => 'You were successful!'
        ]);
    }
    return redirect()->back()->with([
        'message' => 'danger',
        'textmessage' => "There's a problem..."
    ]);     return view('profile.profile', compact('profile'));
   
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
