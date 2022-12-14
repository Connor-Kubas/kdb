<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
     /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ratings';

    /**
     * Allow all columns to be mass assignable.
     */
    protected $guarded = [];
}
