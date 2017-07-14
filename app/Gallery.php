<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public function events() {

    	return $this->belongsTo('App\Event');

    }
}
