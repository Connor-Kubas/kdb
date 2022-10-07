<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $movie = $request->input('search');
        $movie = strtolower($search);
        $movie = str_replace(' ', '_', $search);
        $movie .= '.jpg';

        return view('movie-view', compact('movie'));
    }
}
