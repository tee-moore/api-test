<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'year',
        'format_id',
    ];

    /**
     * The actors that belong to the movie.
     */
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    /**
     * Get the format that belongs to the movie.
     */
    public function format()
    {
        return $this->belongsTo(Format::class);
    }

    /**
     * Get the user that belongs to the movie.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the preorders that belongs to the movie.
     */
    public function preorders()
    {
        return $this->hasMany(Preorder::class);
    }
}
