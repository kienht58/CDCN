<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Category;
use App\Models\Game;

class DashboardController extends Controller
{
    public function index() {
    	$categories = Category::all();
    	$popular_games = Game::orderBy('views', 'desc')->take(3)->get();
    	$most_downloaded_game = Game::where('downloads', '>=', '1')->first();
    	$recent_games = Game::orderBy('releaseTime', 'desc')->first();
    	return view('welcome', compact('categories', 'popular_games', 'most_downloaded_games', 'recent_games'));
    }
}
