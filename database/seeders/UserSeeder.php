<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'joseagus',
            'email' => 'zellsusj229@gmail.com',
            'password' => bcrypt('joseagus')
            
        ]);

        User::factory(10)->create();
    }
}
