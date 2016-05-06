<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";

    public function post() {
    	return $this->belongsTo('App\Models\Post');
    }
}
