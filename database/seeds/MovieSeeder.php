<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	   DB::table('movies')->insert([
    		[
    		'name' => 'Avengers: Infinity War',
    		'slug' => 'avengers-infinity-war',
    		'description' => 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos.',
    		'release_date' => '2017',
    		'rating' => 5,
    		'ticket_price' => 100,
    		'country' => 'USA',
    		'photo' => 'avengers.jpg',
    		],

    		[
    		'name' => 'Wonder Woman',
    		'slug' => 'wonder-woman',
    		'description' => 'American superhero film based on the DC Comics character of the same name',
    		'release_date' => '2017',
    		'rating' => 4,
    		'ticket_price' => 150,
    		'country' => 'USA',
    		'photo' => 'wonderwoman.jpg',
    		],

    		[
    		'name' => 'Thor: Ragnarok',
    		'slug' => 'thor-ragnarok',
    		'description' => 'Thor is imprisoned on the planet Sakaar, and must race against time to return to Asgard and stop Ragnarök.',
    		'release_date' => '2016',
    		'rating' => 4,
    		'ticket_price' => 140,
    		'country' => 'United Kingdom',
    		'photo' => 'thor.jpg',
    		]
    		]);



      DB::table('genre_movie')->insert([
        'movie_id' => 1,
        'genre_id' => 1
      ],
      [
        'movie_id' => 2,
        'genre_id' => 2
      ],
      [
        'movie_id' => 3,
        'genre_id' => 2
      ],
      [
        'movie_id' => 4,
        'genre_id' => 2
      ],
      [
        'movie_id' => 3,
        'genre_id' => 2
      ],
      [
        'movie_id' => 1,
        'genre_id' => 4
      ]

      );



    }
}
