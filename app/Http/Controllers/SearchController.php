<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->title;
        $title = strtolower($title);
        $title = str_replace(' ', '_', $title);

        if (isset(Movie::where('title', $title)->get()->first()->id)) {
            $movie_id = Movie::where('title', $title)->get()->first()->id;
        } else {
            return redirect()->back();
        }

        $movie_id .= '.jpg';

        return view('movie-view', compact('movie_id'));
    }
}
