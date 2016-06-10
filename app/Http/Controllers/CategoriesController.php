<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Category;
use App\Models\Game;
use DB;

class CategoriesController extends Controller
{
    public function show($category_id) {
    	$categories = Category::all();
    	$category = $categories->find($category_id);
    	$games = DB::table('games')
    				->join('photos', 'photos.game_id', '=', 'games.id')
    				->select('games.*', 'photos.path')
    				->where('photos.isAvatar', 1)
    				->where('category', $category_id)->get();

    	//dd($games);
    	return view('categories.show', compact('categories', 'category', 'games'));
    }
}
