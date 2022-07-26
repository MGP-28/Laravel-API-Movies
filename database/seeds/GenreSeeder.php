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
        $genresNames = [
            'Adventure',
            'Drama'
        ];

        foreach ($genresNames as $genreName){
            \DB::table('genres') -> insert([
                'name' => $genreName,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
