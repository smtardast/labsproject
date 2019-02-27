<?php

namespace App\Http\Controllers;


use App\Servicepage;
use Illuminate\Http\Request;
use App\Service;
use App\Project;
use App\Homepage;
use App\Contactcomponent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {  
        $services = Service::InRandomOrder()->take(9)->get();
        $contents = Servicepage::all()->first();
        $projects = Project::InRandomOrder()->take(3)->get();
        $contentsH= Homepage::all()->first();
        $contentsC= Contactcomponent::all()->first();
        return view('pages.home', compact('contents','contentsH','contentsC', 'services', 'projects'));
    }
}
