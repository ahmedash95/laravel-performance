<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate(50);

        return view('tags', [
            'name' => 'Tags',
            'tags' => $tags
        ]);
    }
}
