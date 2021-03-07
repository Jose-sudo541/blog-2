<?php

namespace Database\Seeders;

use App\Models\Imagen;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::factory(50)->create();

        foreach ($posts as $post) {
            Imagen::factory(1)->create([
                'imageable_id'=> $post->id,
                'imageable_type'=> Post::class
            ]);
            $post->etiquetas()->attach([
                rand(1, 4),
                rand(5, 8)
            ]);
        }
    }
}
