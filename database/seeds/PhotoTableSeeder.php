<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::create([
        	'game_id' => 5,
        	'path' => '9.jpg',
        	'isAvatar' => 1
        ]);
        Photo::create([
        	'game_id' => 5,
        	'path' => '10.jpg',
        	'isAvatar' => 0
        ]);
        Photo::create([
        	'game_id' => 5,
        	'path' => '11.jpg',
        	'isAvatar' => 0
        ]);

        Photo::create([
        	'game_id' => 1,
        	'path' => '1.jpg',
        	'isAvatar' => 1
        ]);
        Photo::create([
        	'game_id' => 1,
        	'path' => '2.jpg',
        	'isAvatar' => 0
        ]);
        Photo::create([
        	'game_id' => 1,
        	'path' => '3.jpg',
        	'isAvatar' => 0
        ]);

        Photo::create([
        	'game_id' => 2,
        	'path' => '1.jpg',
        	'isAvatar' => 1
        ]);
        Photo::create([
        	'game_id' => 2,
        	'path' => '2.jpg',
        	'isAvatar' => 0
        ]);
        Photo::create([
        	'game_id' => 2,
        	'path' => '3.jpg',
        	'isAvatar' => 0
        ]);

        Photo::create([
        	'game_id' => 3,
        	'path' => '1.jpg',
        	'isAvatar' => 1
        ]);
        Photo::create([
        	'game_id' => 3,
        	'path' => '2.jpg',
        	'isAvatar' => 0
        ]);
        Photo::create([
        	'game_id' => 3,
        	'path' => '3.png',
        	'isAvatar' => 0
        ]);
    }
}
