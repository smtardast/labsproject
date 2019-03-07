<?php

namespace App\Http\Controllers;

use App\Servicepage;
use App\Contactcomponent;
use App\Homepage;
use Illuminate\Http\Request;
use App\Http\Requests\HomepageUpdate;

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
    public function update(HomepageUpdate $request, Homepage $homepage)
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
        if ($homepage->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
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
