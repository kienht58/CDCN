<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'email' => 'linkneverdie@gmail.com',
            'password' => bcrypt('123'),
            'activation_code' => 'Youdabest',
            'active' => 1,
            'role' => 'admin'
        ]);
        User::create([
            'username' => 'loiprovd193',
            'email' => 'nguyenphucloi193@gmail.com',
            'password' => bcrypt('phucloi193'),
            'activation_code' => 'Youdabest',
            'active' => 1,
            'role' => 'user'
        ]);
    }
}
