<?php

namespace App;

use Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    public function article(){
        return $this->hasMany('App\Article', 'user_id', 'id');
    }

    public function profile(){
        return $this->hasOne('App\Profile', 'user_id', 'id');
    }

    public function scopeTeam($query)
    {
        return $query->where('role_id', '=', 2);
    }

    public function isAdmin(){
        return Auth::user()->role->name === 'admin';
    }

    public function isEditor(){
        return Auth::user()->role->name === 'editor';
    }

    public function isGuest(){
        return Auth::user()->role->name === 'guest';
    }
}
