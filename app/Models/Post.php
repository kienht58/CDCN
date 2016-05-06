<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";

    public function reviews() {
    	return $this->hasMany('App\Models\Review');
    }

    public function game() {
    	return $this->hasOne('App\Models\Game');
    }

    public function category() {
    	return $this->belongsTo('App\Models\Category');
    }
}
