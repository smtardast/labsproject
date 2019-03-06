<?php

namespace App\Http\Controllers;

use App\Contactcomponent;
use Illuminate\Http\Request;
use App\Http\Requests\ContactpageUpdate;


class ContactcomponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Contactcomponent  $contactcomponent
     * @return \Illuminate\Http\Response
     */
    public function show(Contactcomponent $contactcomponent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactcomponent  $contactcomponent
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactcomponent $contactcomponent)
    {
        $contactcomponent=Contactcomponent::all()->first();
        return view('contents.contactcontent', compact('contactcomponent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactcomponent  $contactcomponent
     * @return \Illuminate\Http\Response
     */
    public function update(ContactpageUpdate $request, Contactcomponent $contactcomponent)
    {
       $contactcomponent->title=$request->title;
       $contactcomponent->description=$request->description; 
       $contactcomponent->address=$request->address; 
       $contactcomponent->office=$request->office; 
       $contactcomponent->save(); 
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactcomponent  $contactcomponent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactcomponent $contactcomponent)
    {
        //
    }
}
