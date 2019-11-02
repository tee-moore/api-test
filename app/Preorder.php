<?php

namespace App;

use App\Events\PreorderCreated;
use Illuminate\Database\Eloquent\Model;

class Preorder extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'movie_id'
    ];

    /**
     * Get the movie that owns the preorder.
     */
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => PreorderCreated::class,
    ];
}
