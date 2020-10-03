<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::postsStatusYes();
        return view('posts.index', compact('posts'));
    }

    public function post($id) {
        $post = Post::query()->find($id);
        return view('posts.show', compact('post'));
    }

    public function json() {
        return  [['id' => 5,'title'=>'Title 5', 'text'=> "text 5"], ['id' => 6, 'title'=>'Title 6', 'text'=> "text 6"]];
    }
}
