<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function services(){
        return $this->hasMany('App\Service');
    }
    
    public function projects(){
        return $this->hasMany('App\Service');
    }
}
