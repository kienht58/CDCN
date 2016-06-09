<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = "reviews";

    protected $fillable = [
    	'user_id', 'content', 'rating', 'post_id'
    ];

    public function post() {
    	return $this->belongsTo('App\Models\Post');
    }
}
