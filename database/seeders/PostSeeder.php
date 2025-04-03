<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\CategoryPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = CategoryPost::all();

        $posts = [
            [
                'name' => 'Рецепты Блионовав',
                'content' => 'Рецепты Блионовав Рецепты Блионовав Рецепты Блионовав',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,
                'is_banner' => true,
            ],
            [
                'name' => 'Рецепты Блионовав',
                'content' => 'Рецепты БлионовавРецепты БлионовавРецепты БлионовавРецепты Блионовав',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,
                'is_banner' => true,
            ],
            [
                'name' => 'Рецепт Блионов',
                'content' => 'Рецепты БлионовавРецепты БлионовавРецепты Блионовав',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,
                'is_banner' => false,
            ],
        ];

        foreach($posts as $post){

            $randomCategory = CategoryPost::inRandomOrder()->first();

            Post::create([
                'category_post_id' => $randomCategory->id,
                'name' => $post['name'],
                'content' => $post['content'],
                'image' => $post['image'],
                'is_active' => $post['is_active'],
                'is_featured'=> $post['is_featured'],
                'is_banner' => $post['is_banner'],
            ]);
        }
    }
}
