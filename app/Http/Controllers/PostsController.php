<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\Review;
use App\Models\Game;
use App\Models\Post;

class PostsController extends Controller
{
    public function show($category_id, $post_id) {
    	$categories = Category::all();
    	$game = Game::find($post_id);
    	$reviews = Review::where('post_id', $post_id)->get();
        $related_games = Game::where('name', 'like', 'Witcher%')->get();
    	return view('posts.show', compact('post_id','category_id','categories', 'game', 'reviews', 'related_games'));
    }

    public function storeReview(Request $request, $post_id) {
    	$review = new Review;
    	$review->content = $request->input('content');
    	$review->post_id = $post_id;
    	$review->save();

        return redirect()->back();
    }
}
