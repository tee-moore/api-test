<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the movies by the format.
     */
    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
