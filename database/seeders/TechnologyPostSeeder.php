<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Technology;

class TechnologyPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 50 ; $i++){
            $post = Post::inRandomOrder()->first();
            $technology_id = Technology::inRandomOrder()->first()->id;
            $post->technologies()->attach($technology_id);

        }
    }
}
