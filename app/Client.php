<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;
class Client extends Model
{
    public function testimonals(){
       return $this->hasMany('App\Testimonial', 'client_id', 'id'); 
    }
}
