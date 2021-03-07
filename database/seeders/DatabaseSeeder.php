<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Etiqueta;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Categoria::factory(10)->create();
        Etiqueta::factory(10)->create();
        $this->call(PostSeeder::class);
    }
}
