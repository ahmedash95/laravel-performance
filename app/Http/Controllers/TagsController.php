<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    public function index()
    {
        $tags = Tag::query()
            ->select('tags.*',DB::raw('COUNT(posts_tags.post_id) as posts_count'))
            ->leftJoin('posts_tags','posts_tags.tag_id','=','tags.id')
            ->groupBy('tags.id')
            ->paginate(50);

        return view('tags', [
            'name' => 'Tags',
            'tags' => $tags
        ]);
    }
}
