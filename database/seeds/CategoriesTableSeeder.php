<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name' => 'MOBA'
        ]);
        Category::create([
        	'name' => 'Action'
        ]);
        Category::create([
        	'name' => 'RPG'
        ]);
    }
}
