<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_active', true)->get();
        return view('post::index',['title' => 'Посты',
        'posts' => $posts,
        ]);
    }

    public function show($id){
        $post = Post::where('id', $id)->first();
        return view('post::single-post', ['title' => 'Пост',
        'post' => $post,
        ]);
    }
}
