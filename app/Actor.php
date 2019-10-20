<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The movies that belong to the actor.
     */
    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
