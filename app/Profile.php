<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Profile extends Model
{
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
