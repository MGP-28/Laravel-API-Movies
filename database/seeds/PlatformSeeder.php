<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platformsNames = [
            'XBOX One',
            'PS5',
            'PC'
        ];

        foreach ($platformsNames as $platformName){
            \DB::table('platforms') -> insert([
                'name' => $platformName,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
