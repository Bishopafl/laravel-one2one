<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * need to be protected and $fillable is the namesake for the fill array
     */
    protected $fillable = [
        // go to model if mass assignment exception and make name fillable
        'name'

    ];
}
