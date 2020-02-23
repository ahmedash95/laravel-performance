<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::paginate(50);
        return view('posts',[
            'name' => 'Posts',
            'posts' => $posts
        ]);
    }
}
