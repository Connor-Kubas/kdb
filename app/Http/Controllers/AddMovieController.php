<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AddMovieController extends Controller
{
    /**
     * Returns view.
     */
    public function index()
    {
        return view('add-movie');
    }

    /**
     * Adds the movie to the database.
     */
    public function create(Request $request)
    {   
        // Updates database
        $movie = new Movie;
        $movie->title = $request->title;
        $movie->title = strtolower($movie->title);
        $movie->title = str_replace(' ', '_', $movie->title);
        $movie->year_of_release = $request->year;
        $movie->save();

        // Upload image to public/storage/posters
        $request->file('upload')->storeAs('public/posters', $movie->id . '.jpg');

        // Format tiel for display
        $title = $request->title;
        $title = strtolower($title);
        $title = str_replace(' ', '_', $title);
        $title .= '.jpg';

        return view('/landing', compact('title'));
    }
}
