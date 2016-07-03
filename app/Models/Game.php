<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = "games";

    protected $fillable = [
    	'name',
    	'description',
    	'minimumRequirement',
    	'recommendRequirement',
    	'category',
    	'releaseTime',
        'image',
        'popularity',
        'priceOnSteam',
        'remaining_quantity',
        'discount',
    	'videoLink',
        'size'
    ];
}
