<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        
        $user = Auth::user();

        // dd($test);

        $title = str_replace(' ', '_', strtolower($request->title));

        if (isset(Movie::where('title', $title)->get()->first()->id)) {
            $movie_id = Movie::where('title', $title)->get()->first()->id; 
        } else {
            return redirect()->back();
        }
        
        $rating = $user->ratings()->where('movie_id', $movie_id)->get()->first()->rating ?? 0;

        return view('movie-view', compact('movie_id', 'rating', 'user'));
    }
}
