<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             FormatTableSeeder::class,
             ActorTableSeeder::class,
             MovieTableSeeder::class,
             RalationActorMovieTableSeeder::class,
             UserTableSeeder::class
         ]);
    }
}
