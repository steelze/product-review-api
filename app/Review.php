<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * Get the product that owns the review.
     */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    /**
     * Get the user that made the review.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
