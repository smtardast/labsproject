<?php

namespace App\Http\Controllers;


use App\Servicepage;
use Illuminate\Http\Request;
use App\Service;
use App\Project;
use App\Homepage;
use App\Contactcomponent;
use App\User;
use App\Client;
use App\Carousel;
use App\Comment;
use App\Article;


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
        $teams = User::team()->InRandomOrder()->take(3)->get();
        $clients=Client::paginate(3);
        $services = Service::InRandomOrder()->paginate(9);
        
        $contents = Servicepage::all()->first();
        $projects = Project::InRandomOrder()->take(3)->get();
        $contentsH= Homepage::all()->first();
        $contentsC= Contactcomponent::all()->first();
        $carousels=Carousel::all();
        return view('pages.home', compact('contents','contentsH','contentsC', 'services', 'projects', 'teams', 'clients', 'carousels'));
    }

    public function backend(){

        $commstovalidate=Comment::tovalidate()->get()->count();
        $articlestovalidate=Article::tovalidate()->get()->count();
        return view('home', compact('commstovalidate','articlestovalidate'));
    }
}
