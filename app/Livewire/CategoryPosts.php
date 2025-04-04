<?php

namespace App\Livewire;

use App\Models\CategoryPost;
use App\Models\Post;
use Livewire\Component;

class CategoryPosts extends Component
{

    public $selectedCategoryId = null;
    public $categories;
    public $posts;

    public function mount()
    {
        $this->categories = CategoryPost::where('is_active', true)->get();
        $this->posts = Post::where('is_active', true)->get();
    }

    public function selectCategory($categoryId)
    {

        $this->selectedCategoryId = $categoryId;

        if ($categoryId) {
            $this->posts = Post::where('category_post_id', $categoryId)->where('is_active', true)->get();
        } else {
            $this->posts = Post::where('is_active', true)->get();
        }
    }

    public function render()
    {
        return view('livewire.category-posts');
    }
}
