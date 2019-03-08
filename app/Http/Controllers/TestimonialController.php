<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests\TestimonialStore;
use App\Http\Requests\TestimonialUpdate;


class TestimonialController extends Controller
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
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $request, $client)
    {    
//         $newtestimonial= new Testimonial;
// dd($client=Client::find($client)->get());
//         $newtestimonial->client_id=$client->id;
//         $newtestimonial->text=$request->text;
//         // dd($newtestimonial);
//         if ($newtestimonial->save()) {
        
//             return redirect()->back()->with([
//                 'message' => 'success',
//                 'textmessage' => 'You were successful!'
//             ]);
//         }
//         return redirect()->back()->with([
//             'message' => 'danger',
//             'textmessage' => "There's a problem..."
//         ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        // return view('testimonial-create', compact(''));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        // dd($testimonial);

        return view('testimonial.testimonial-edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdate $request, Testimonial $testimonial)
    {
        // dd('hi');
        $testimonial->text=$request->text;
        if ($testimonial->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        
        if ($testimonial->delete()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
    }

    public function maketestimonial(Client $client){

        // $client=Client::find($client);
        // dd($client);
        return view('testimonial.testimonial-create', compact('client'));
    }

    public function storetestimonial(TestimonialStore $request, $client)
    {   
        //  dd($client);
        $newtestimonial= new Testimonial;
// dd($client=Client::find($client)->get());
        $newtestimonial->client_id=$client;
        $newtestimonial->text=$request->text;
        // dd($newtestimonial);
        if ($newtestimonial->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
    }
}
