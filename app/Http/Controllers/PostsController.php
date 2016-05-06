<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Models\Category;
use App\Models\Review;

class PostsController extends Controller
{
    public function show($category_id, $post_id) {
    	$categories = Category::all();
    	$post = $categories->find($category_id)->posts->find($post_id);
    	$game = $post->game;
    	$reviews = $post->reviews;
    	return view('posts/show', compact('category_id', 'categories', 'post', 'game', 'reviews'));
    }

    public function storeReview(Request $request, $category_id, $post_id) {
    			$review = new Review;
    			$review->content = $request->reviewContent;
    			$review->post_id = $post_id;
    			$review->save();

    			return Response::json($review);

    		
    }
}
