<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use Carbon\Carbon;

use App\Models\Category;
use App\Models\Game;
use App\Models\Post;
use App\Models\Photo;

class GamesController extends Controller
{
    public function create()
    {
        $categories = Category::all();
    	$categoriesList = Category::all()->lists('name', 'id');
    	return view('games.create', compact('categories', 'categoriesList'));
    }

    public function store(Request $request)
    {
        //dd($request);
    	$request->releaseTime = Carbon::createFromFormat('Y-m-d', $request->releaseTime);
        $data = $request->except('_method', '_token');
        
        $game = Game::create($data);

        if ($request->hasFile('photo')) {
            $photos = $request->file('photo');
            $destinationPath = "upload/game/" . $game->id;
            $counter = 0;
            foreach($photos as $photo) {
                $fileName = $photo->getClientOriginalName();
                $success = $photo->move($destinationPath, $fileName);
                $counter++;
                if ($counter == 1)
                    $isAva = true;
                else $isAva = false;
                $photoObj = Photo::create([
                    'game_id' => $game->id,
                    'path' => $fileName,
                    'isAvatar' => $isAva
                ]);
            }
        }

    	return redirect()->route('categories.show', $request->category);
    }

    public function edit($game_id) 
    {
        $categories = Category::all();
        $categoriesList = Category::all()->lists('name', 'id');
        $game = Game::find($game_id);
        return view('games.edit', compact('categories', 'categoriesList', 'game'));
    }

    public function update(Request $request, $game_id)
    {
        $game = Game::find($game_id);
        $game->update($request->except('_method', '_token'));
        return redirect()->route('post.show', [$game->category, $game_id]);
    }
}
