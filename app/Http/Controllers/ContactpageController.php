<?php

namespace App\Http\Controllers;

use App\Contactpage;
use App\Contactcomponent;
use Illuminate\Http\Request;

class ContactpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contentsC= Contactcomponent::all()->first();
        return view('pages.contact', compact('contentsC'));
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
     * @param  \App\Contactpage  $contactpage
     * @return \Illuminate\Http\Response
     */
    public function show(Contactpage $contactpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contactpage  $contactpage
     * @return \Illuminate\Http\Response
     */
    public function edit(Contactpage $contactpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contactpage  $contactpage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contactpage $contactpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contactpage  $contactpage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactpage $contactpage)
    {
        //
    }
}
