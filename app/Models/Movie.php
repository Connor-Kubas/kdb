<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'movies';

    /**
     * Allow all columns to be mass assignable.
     */
    protected $guarded = [];

}
