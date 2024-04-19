<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\User::create([
            'title'	=> str_random(20),
            'content'	=> str_random(10),
    ]);
    }
}