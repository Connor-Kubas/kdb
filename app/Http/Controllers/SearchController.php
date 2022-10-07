<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $movie = $request->input('search');
        $movie = strtolower($movie);
        $movie = str_replace(' ', '_', $movie);
        $movie .= '.jpg';

        return view('movie-view', compact('movie'));
    }
}
