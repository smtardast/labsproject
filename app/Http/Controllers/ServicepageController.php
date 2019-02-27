<?php

namespace App\Http\Controllers;

use App\Servicepage;
use Illuminate\Http\Request;
use App\Service;
use App\Project;
use App\Contactcomponent;

class ServicepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $contentsC= Contactcomponent::all()->first();
        $contents = Servicepage::all()->first();
        $services = Service::InRandomOrder()->take(9)->get();
        $projects = Project::all()->sortByDesc('id')->take(3);
        $projects2 = Project::all()->sortByDesc('id')->take(6)->take(-3);



        return view('pages.services', compact ('contents','services','projects','projects2', 'contentsC'));
        
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
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function show(Servicepage $servicepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicepage $servicepage)
    {
        $servicepage=Servicepage::all()->first();
        return view('contents.servicecontent', compact('servicepage'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicepage $servicepage)
    {
        $servicepage->servicetitle=$request->servicetitle;
        $servicepage->projectstitle=$request->projectstitle;
        $servicepage->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicepage $servicepage)
    {
        //
    }
}
