<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('adverts')->insert([
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'duration' => rand(2),
            ],
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'duration' => rand(2),
            ],
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'duration' => rand(2),
            ],
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'duration' => rand(2),
            ]
           
        ]);
    }
}
