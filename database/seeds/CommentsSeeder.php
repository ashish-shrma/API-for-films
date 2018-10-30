<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('comments')->insert([
    		[
    		'user_id' => 1,
    		'film_id' => 1,
    		'message' => 'Horrible Movie',
    		'name' => 'ashish',
    		],

    		[
    		'user_id' => 2,
    		'film_id' => 2,
    		'message' => 'Servicable',
    		'name' => 'alan',

    		],

    		[
    		'user_id' => 1,
    		'film_id' => 3,
    		'message' => 'nice',
    		'name' => 'alex',

    		]
    		
    		]);
    }
}
