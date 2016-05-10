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
    	'genre',
    	'releaseTime',
    	'downloadLink'
    ];
}
