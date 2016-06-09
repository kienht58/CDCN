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
    	return view('posts.show', compact('category_id', 'categories', 'game', 'reviews'));
    }

    public function storeReview(Request $request) {
    	$review = new Review;
    	$review->content = $request->input('content');
    	$review->post_id = $request->input('post_id');
    	$review->save();

        return redirect()->back();
    }
}
