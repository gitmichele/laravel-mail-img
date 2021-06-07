<?php

use Illuminate\Database\Seeder;
use App\Movie;
use App\Actor;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class, 3) -> create()
            -> each(function($movie) {

            $actors = Actor::inRandomOrder() -> limit(rand(1, 5)) -> get();

            $movie -> actors() -> attach($actors);
            $movie -> save();
        });
    }
}
