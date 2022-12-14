<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
    /**
     * Determine if the user has a rating and then store it with other functions.
     */
    public function store(Request $request)
    {
        $movie_id = $request->movie_id;
        $value = $request->rating;
        $user = Auth::user();
        $hasRating = $user->ratings()->where('movie_id', $movie_id)->get()->first()->rating ?? null;
        
        if (isset($hasRating)) {
            // If they have a rating, update it.
            $this->update($user, $value, $movie_id);
        } else {
            // If they don't have a rating create a new one.
            $this->create($user, $value, $movie_id);
        }

        return redirect()->back();
    }

    /**
     * Create a new rating.
     */
    public function create($user, $value, $movie_id)
    {
        $rating = new Rating;
        $rating->user_id = $user->id;
        $rating->movie_id = $movie_id;
        $rating->rating = $value;
        $rating->save();
    }

    /**
     * Update the user's rating.
     */
    public function update($user, $value, $movie_id)
    {
        $rating = Rating::where('movie_id', $movie_id)->first();
        $rating->rating = $value;
        $rating->save();
    }
}
