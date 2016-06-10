<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Game;

class DashboardController extends Controller
{
    public function index() {
    	$categories = Category::all();
    	$popular_games = Game::orderBy('views', 'desc')->take(3)->get();
    	$most_downloaded_game = Game::where('downloads', '>=', '0')->first();
    	$recent_game = Game::where('releaseTime', '<', Carbon::now())->orderBy('releaseTime', 'desc')->first();
    	$future = Game::where('releaseTime', '>', Carbon::now())->first();
    	return view('welcome', compact('categories', 'popular_games', 'most_downloaded_game', 'recent_game', 'future'));
    }
}
