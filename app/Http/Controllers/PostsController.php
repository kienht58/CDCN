<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\Review;

class PostsController extends Controller
{
    public function show($category_id, $post_id) {
    	$categories = Category::all();
    	$post = $categories->find($category_id)->posts->find($post_id);
    	$game = $post->game;
    	$reviews = $post->reviews;
    	return view('posts.show', compact('category_id', 'categories', 'post', 'game', 'reviews'));
    }

    public function storeReview(Request $request) {
    	$review = new Review;
    	$review->content = $request->input('content');
    	$review->post_id = $request->input('post_id');
    	$review->save();

    	return response()->json($review);
    }
}
