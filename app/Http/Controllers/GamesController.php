<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;

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
    	$data = $request->except('_method', '_token');
    	$game = Game::create($data);
    	return Response::json($game);
    }
}
