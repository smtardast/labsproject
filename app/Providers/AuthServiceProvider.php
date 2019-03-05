<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin',function($user) {
            return  Auth::user()->role->name === "admin";
            });
        
        Gate::define('editor',function($user) {
            return  Auth::user()->role->id <=2;
            });
        

        // Gate::define('update-article', function ($user, $article) {
        //     if(Auth::user()->role->name === "admin"){
        //         return true;
        //     }
        //     return $user->id == $article->user_id;
        // });

        // Gate::define('update-profile', function ($user) {
            
        //     if(Auth::user()->role->name === "admin"){
        //         return true;
        //     }
        //     return $user->id == $profile->user_id;
        // });
        

    }
}
