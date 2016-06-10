<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Models\Review;
use App\Models\Game;
use App\Models\Post;
use Auth;
use DB;

class PostsController extends Controller
{
    public function show($category_id, $post_id) {
    	$categories = Category::all();
    	$game = Game::find($post_id);
    	$reviews = DB::table('reviews')
                    ->join('users', 'reviews.user_id', '=', 'users.id')
                    ->select('reviews.*', 'users.username', 'users.avatar')
                    ->where('reviews.post_id', $post_id)
                    ->get();

        //dd($reviews);
        $related_games = Game::where('name', 'like', 'Witcher%')->get();
    	return view('posts.show', compact('post_id','category_id','categories', 'game', 'reviews', 'related_games'));
    }


    public function storeReview(Request $request) {
        //dd($request->all());
    	$review = new Review;
    	$review->content = $request->input('content');
    	$review->post_id = $request->input('post_id');
        $review->rating = $request->input('rating');
        $review->user_id = Auth::user()->id;
        return redirect()->back();
    }
}
