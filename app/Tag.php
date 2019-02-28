<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles(){
        return $this->belomgsToMany('App\Article', 'article_tags', 'article_id', 'tag_id');

    }
}
