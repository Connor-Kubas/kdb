<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(User $user, Request $request)
    {
        dd($user);
        $title = str_replace(' ', '_', strtolower($request->title));

        if (isset(Movie::where('title', $title)->get()->first()->id)) {
            $movie_id = Movie::where('title', $title)->get()->first()->id; 
        } else {
            return redirect()->back();
        }

        // $user = User::where('id', 1)->get()->first();
        
        $rating = $user->ratings()->where('movie_id', $movie_id)->get()->first()->rating ?? null;

        return view('movie-view', compact('movie_id', 'rating'));
    }
}
