<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the reviews of the product.
     */
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    /**
     * Get the user that added the product.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
