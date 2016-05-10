<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use Carbon\Carbon;

use App\Models\Category;
use App\Models\Game;

class GamesController extends Controller
{
    public function create()
    {
    	$categories = Category::all();
    	return view('games.create', compact('categories'));
    }

    public function store(Request $request)
    {
    	$request->releaseTime = Carbon::createFromFormat('Y-m-d', $request->releaseTime);
        // return $request->releaseTime;
        $data = $request->except('_method', '_token');
        $game = Game::create($data);
    	return $game;
    }
}
