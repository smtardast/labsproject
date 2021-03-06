<?php

namespace App\Http\Controllers;

use App\Service;
use App\Icon;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceStore;
use App\Http\Requests\ServiceUpdate;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('service.service',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $icons=Icon::all();
        return view('service.service-create', compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceStore $request)
    {
        $newservice= new Service;
        $newservice->title=$request->title;
        $newservice->text=$request->text;
        $newservice->icon_id=$request->icon_id;
        if ($newservice->save()) {
        
            return redirect()->back()->with([
                'message' => 'success',
                'textmessage' => 'You were successful!'
            ]);
        }
        return redirect()->back()->with([
            'message' => 'danger',
            'textmessage' => "There's a problem..."
        ]);        return redirect()->back();
        $services = Service::all();
        return view('service.service',compact('services'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.service-edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdate $request, Service $service)
    {
        $service->title=$request->title;
        $service->text=$request->text;
       // $service->=$request->;
       if ($service->save()) {
        
        return redirect()->back()->with([
            'message' => 'success',
            'textmessage' => 'You were successful!'
        ]);
    }
    return redirect()->back()->with([
        'message' => 'danger',
        'textmessage' => "There's a problem..."
    ]);        return redirect()->back();
       $services = Service::all();
        return view('service.service',compact('services'));



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
