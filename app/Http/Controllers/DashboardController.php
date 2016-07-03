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
  //(noi bat, ban chay) = popularity, moi = release time, dang khuyen mai = discount
  //get list game name + price
    public function index() {
    	$categories = Category::all();

        ///get all popular games
        $popular_games = Game::where([
            ['popularity', 'hot'], ['views', '>=', '0']
            ])->take(3)->get();
    	foreach($popular_games as $game) {
    		$image = DB::table('photos')
    					->where('game_id', $game->id)
    					->where('isAvatar', 1)->first();
    		$game['image'] = $image->path;
    	}

        //list popular game for dynamic scroll
        $list_game = "";
        foreach($popular_games as $game) {
            $list_game = '$'.$list_game.$game->name.'('.$game->priceOnSteam.') | ';
        }
        //get most downloaded games
    	$most_downloaded_games = Game::where('downloads', '>=', '0')->get();
        foreach($most_downloaded_games as $game) {
            $image = DB::table('photos')
        				->where('game_id', $game->id)
        				->where('isAvatar', 1)->first();
        	$game['image'] = $image->path;
        }

        //get most recent games
    	$recent_games = Game::where([
            ['releaseTime', '<=', Carbon::now()],
            ['releaseTime', '>=', Carbon::now()->subMonths(3)]
            ])->orderBy('releaseTime', 'desc')->get();
        foreach($recent_games as $game) {
            $image = DB::table('photos')
        				->where('game_id', $game->id)
        				->where('isAvatar', 1)->first();
        	$game['image'] = $image->path;
        }

        //get discount games
        $discount_games = Game::where('discount', '>', '0')->orderBy('discount', 'desc')->get();
        foreach($discount_games as $game) {
            $image = DB::table('photos')
        				->where('game_id', $game->id)
        				->where('isAvatar', 1)->first();
        	$game['image'] = $image->path;
        }

    	return view('welcome', compact('categories', 'popular_games', 'list_game', 'most_downloaded_games', 'recent_games', 'discount_games'));
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
