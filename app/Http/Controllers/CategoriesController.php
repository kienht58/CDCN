<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Category;
use App\Models\Game;

class CategoriesController extends Controller
{
    public function show($category_id) {
    	$categories = Category::all();
    	$category = $categories->find($category_id);
    	$games = Game::where('category', $category_id)->get();
    	return view('categories.show', compact('category', 'games'));
    }
}
