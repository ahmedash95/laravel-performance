<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('posts')->paginate(50);

        return view('categories',[
            'name' => 'Categories',
            'categories' => $categories,
        ]);
    }
}
