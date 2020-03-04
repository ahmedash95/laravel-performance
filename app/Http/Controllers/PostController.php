<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('user:id,name','category:id,name','tags:tags.id,name')->paginate(50);
        return view('posts',[
            'name' => 'Posts',
            'posts' => $posts
        ]);
    }
}
