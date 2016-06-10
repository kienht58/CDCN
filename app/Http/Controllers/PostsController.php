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
        $photos = DB::table('photos')->where('game_id', $post_id)->get();
    	$reviews = DB::table('reviews')
                    ->join('users', 'reviews.user_id', '=', 'users.id')
                    ->select('reviews.*', 'users.username', 'users.avatar')
                    ->where('reviews.post_id', $post_id)
                    ->get();
        $averageRate = 0;
        $counter = 0;
        foreach($reviews as $review) {
            $averageRate += $review->rating;
            $counter++;
        }
        if ($counter > 0) {
            $averageRate = round($averageRate / $counter);
        }
        //dd($reviews);
        $related_games = Game::where('name', 'like', 'Witcher%')->get();
    	return view('posts.show', compact('post_id','category_id','categories', 'averageRate', 'game', 'reviews', 'related_games', 'photos'));
    }


    public function storeReview(Request $request) {
        //dd($request->all());
    	$review = new Review;
    	$review->content = $request->input('content');
    	$review->post_id = $request->input('post_id');
        $review->rating = $request->input('rating');
        $review->user_id = Auth::user()->id;
        $review->save();
        return redirect()->back();
    }
}
