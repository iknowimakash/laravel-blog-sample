<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        public function user(){
            return $this->belongsTo('App\User');
        }

        public function image(){
            return $this->belongsTo('App\Image');
        }

    public function tag(){
        return $this->belongsToMany('App\Tag');
    }
}
