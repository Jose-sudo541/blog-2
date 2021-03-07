<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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
        ])->assignRole('Admin');

        User::create([
            'name'=> 'Zellsus',
            'email' => 'raquelj229@gmail.com',
            'password' => bcrypt('joseagus')
        ])->assignRole('Lector');

        User::factory(5)->create();
    }
}
