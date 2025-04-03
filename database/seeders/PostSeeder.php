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
                'name' => 'Ожидается повышение цен на бензин',
                'content' => 'Я сосал огромный Чёёрный ',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,
                'is_banner' => true,
            ],
            [
                'name' => 'Ожидается Новая мета в Дота 2',
                'content' => 'Я сосал огромный Чёёрный пудж',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,
                'is_banner' => true,
            ],
            [
                'name' => 'В Дота 2 добавили речку',
                'content' => 'Я сосал огромный Чёёрный пудж',
                'image' => null,
                'is_active' => true,
                'is_featured'=> false,
                'is_banner' => false,
            ],
        ];

        foreach($posts as $post){
            Post::create([
                'category_post_id' => 1,
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
