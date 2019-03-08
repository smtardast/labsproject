<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientStore;
use App\Http\Requests\ClientUpdate;
use Image;
use Storage;
use App\Testimonial;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $clients=Client::all();
        // $testimonials=Testimonial::where('client_id', 'LIKE', '%'.$client->id.'%')->get();
        return view('clients.clients
        ', compact('clients', 'testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.clients-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStore $request)
    {
       
        $newclient=new Client;
        $newclient->name=$request->name;
        $newclient->job=$request->job;
       
        $newclient->image=$request->image->store('', 'client');
        $path=Storage::disk('client')->path($newclient->image);
        $img=Image::make($path)->resize(360, 448);
        $img->save(); 
        if ($newclient->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
        $clients=Client::all();
        return view('clients.clients
        ', compact('clients'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.clients-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdate $request, Client $client)
    {
        $client->name=$request->name;
        $client->job=$request->job;
        $client->image=$request->image->store('','client');
        $path=Storage::disk('client')->path($client->image);
        $img=Image::make($path)->resize(360, 448);
        $img->save(); 
        if ($client->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);
        $clients=Client::all();
        return view('clients.clients
        ', compact('clients'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        $clients=Client::all();
        return view('clients.clients
        ', compact('clients'));
    }
}
