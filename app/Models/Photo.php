<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';

    protected $fillable = [
    	'game_id', 'path', 'isAvatar'
    ];
}
