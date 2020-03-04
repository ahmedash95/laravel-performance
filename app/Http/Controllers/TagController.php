<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::query()
            ->select('tags.*',DB::raw('COUNT(post_tag.post_id) as posts_count'))
            ->leftJoin('post_tag','post_tag.tag_id','=','tags.id')
            ->groupBy('tags.id')
            ->paginate(50);

        return view('tags', [
            'name' => 'Tags',
            'tags' => $tags
        ]);
    }
}
