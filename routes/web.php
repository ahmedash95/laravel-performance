<?php

Route::get('/',function(){ return redirect('/posts'); });
Route::get('/posts','PostsController@index');
Route::get('/categories','CategoriesController@index');
Route::get('/tags','TagsController@index');
