<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Comment extends Model
{
    public function article(){
        return $this->belongsTo('App\Article', 'article_id', 'id');
    }

    public function scopeValidated($query){
        return $query->where('validated', '=', true);
    }

    public function scopeTovalidate($query){
        return $query->where('validated', '=', false);
    }
}
