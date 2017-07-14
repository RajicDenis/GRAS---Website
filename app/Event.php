<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function comments() {

    	return $this->hasMany('App\Comment');

    }

    public function galleries() {

    	return $this->hasMany('App\Gallery');

    }
}
