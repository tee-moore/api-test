<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Actor;
use App\Movie;

class RalationActorMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Movie::all() as $movie) {
            $actors_ids        = Actor::all()->pluck('id')->toArray();
            $random_actors_ids = Arr::random($actors_ids, 10);
            $movie->actors()->attach($random_actors_ids);
        }
    }
}
