<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $search = strtolower($search);
        $search = str_replace(' ', '_', $search);
        $search .= '.jpg';

        return view('movie-view', compact('search'));
    }
}
