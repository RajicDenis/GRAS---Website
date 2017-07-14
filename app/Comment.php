<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function children() {

        return $this->hasMany('App\Comment', 'parent_id', 'id');

    }

    public function events() {

    	return $this->belongsTo('App\Event');

    }
}
