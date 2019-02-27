<?php

namespace App\Http\Controllers;

use App\Servicepage;
use App\Contactcomponent;
use App\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Homepage $homepage)
    {
        $homecontent= Homepage::all()->first();
        return view('contents.homecontent', compact('homecontent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homepage $homepage)
    {   
        $homepage->subtitle=$request->subtitle;
        $homepage->descriptiontitle=$request->descriptiontitle;
        $homepage->description=$request->description;
        $homepage->description2=$request->description2;
        $homepage->clienttitle=$request->clienttitle;
        $homepage->servicetitle=$request->servicetitle;
        $homepage->teamtitle=$request->teamtitle;
        $homepage->browsetitle=$request->browsetitle;
        $homepage->browsesubtitle=$request->browsesubtitle;
        $homepage->save();
        return redirect()->back();
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homepage $homepage)
    {
        //
    }
}
