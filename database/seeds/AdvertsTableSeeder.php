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
                'start_date' => date('2019-5-5 3:30:34'),
                'end_date' => date('2019-5-7 3:30:34')
            ],
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'start_date' => date('2019-5-5 3:30:34'),
                'end_date' => date('2019-5-7 3:30:34')
            ],
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'start_date' => date('2019-5-5 3:30:34'),
                'end_date' => date('2019-5-7 3:30:34')
            ],
            [
                'title' => Str::random(10),
                'description' => Str::random(50),
                'image' => 'https://source.unsplash.com/random/300x400',
                'start_date' => date('2019-5-5 3:30:34'),
                'end_date' => date('2019-5-7 3:30:34')
            ]
            
        ]);
    }
}
