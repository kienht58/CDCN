<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Carbon\Carbon;
use App\Models\Category;
use App\Models\Game;
use DB;

class DashboardController extends Controller
{
    public function index() {
    	$categories = Category::all();
    	$popular_games = Game::orderBy('views', 'desc')->take(3)->get();
    	foreach($popular_games as $game) {
    		$path = DB::table('photos')
    					->where('game_id', $game->id)
    					->where('isAvatar', 1)->first();
    		$game['path'] = $path->path;
    		//dd($path);
    	}
    	//dd($popular_games);
    	$most_downloaded_game = Game::where('downloads', '>=', '0')->first();
    	$path = DB::table('photos')
    				->where('game_id', $most_downloaded_game->id)
    				->where('isAvatar', 1)->first();
    	$most_downloaded_game['path'] = $path->path;
    	$recent_game = Game::where('releaseTime', '<', Carbon::now())->orderBy('releaseTime', 'desc')->first();
    	$path = DB::table('photos')
    				->where('game_id', $recent_game->id)
    				->where('isAvatar', 1)->first();
    	$recent_game['path'] = $path->path;
    	$future = Game::where('releaseTime', '>', Carbon::now())->first();
    	$path = DB::table('photos')
    				->where('game_id', $future->id)
    				->where('isAvatar', 1)->first();
    	$future['path'] = $path->path;
    	return view('welcome', compact('categories', 'popular_games', 'most_downloaded_game', 'recent_game', 'future'));
    }

    public function faq()
    {
        $categories = Category::all();
        return view('faq', compact('categories'));
    }

    public function intro()
    {
        $categories = Category::all();
        return view('intro', compact('categories'));
    }
}
