<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories',[
            'name' => 'Categories'
        ]);
    }
}
