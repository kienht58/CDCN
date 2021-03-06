<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserAccountSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(PhotoTableSeeder::class);
    }
}
