<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Comment extends Model
{
    public function article(){
        return $this->belongsTo('App\Article', 'article_id', 'id');
    }
}
