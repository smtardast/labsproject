<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Storage;

class Project extends Model
{
    public function icon(){
        return $this->belongsTo('App\Icon');
    }
}
