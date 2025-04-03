<?php

namespace Database\Seeders;

use App\Models\CategoryPost as Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Рецепты',
                'is_active' => true,
                'is_featured' => false,
            ],
            [
                'name' => 'Хитрости',
                'is_active' => true,
                'is_featured' => true,
            ],
        ];

        foreach($categories as $category){
            Category::create($category);
        }
    }
}
