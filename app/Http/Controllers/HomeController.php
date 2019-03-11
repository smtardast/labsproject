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
use App\Testimonial;


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
        $team1 = User::team()->InRandomOrder()->take(1)->get();
        // get admin
        $team2 = User::where('role_id', 1)->get();
        $team3 = User::team()->InRandomOrder()->take(1)->get();
    //    dd(User::team()->count());
       if(User::team()->count() > 2){

           if($team1 == $team3){
            return $this->index();
           }
       }
        $testimonials=Testimonial::InRandomOrder()->get();
        $services = Service::InRandomOrder()->paginate(9);
        
        $contents = Servicepage::all()->first();
        $projects = Project::InRandomOrder()->take(3)->get();
        $contentsH= Homepage::all()->first();
        $contentsC= Contactcomponent::all()->first();
        $carousels=Carousel::all();
        return view('pages.home', compact('contents','contentsH','contentsC', 'services', 'projects', 'team1', 'team2','team3','testimonials', 'carousels'));
    }

    public function backend(){

        $commstovalidate=Comment::tovalidate()->get()->count();
        $articlestovalidate=Article::tovalidate()->get()->count();
        return view('home', compact('commstovalidate','articlestovalidate'));
    }
}
