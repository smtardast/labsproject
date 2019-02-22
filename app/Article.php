<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Storage;

class Article extends Model
{
    public function category(){
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function comment(){
        return $this->hasMany('App\Comment', 'article_id', 'id');
    }
    
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function tag(){
        return $this->belongsToMany('App\Tag'. 'articles_tags', 'article_id', 'tag_id');
    }
}
