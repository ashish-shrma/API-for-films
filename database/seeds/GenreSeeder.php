<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $genres = array('Action','Adventure','Animation','Biography','Comedy','Crime','Documentary','Drama','Family','Fantasy','History','Horror','Music','Mystery','Romance','Sci-Fi','Sport','Thriller','War');
        foreach ($genres as $genre) {
          DB::table('genres')->insert([
            'name' => $genre
          ]);
        }
    }


}
