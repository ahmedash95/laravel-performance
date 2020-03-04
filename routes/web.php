<?php

Route::get('/',function(){ return redirect('/posts'); });
Route::get('/posts','PostController@index');
Route::get('/categories','CategoryController@index');
Route::get('/tags','TagController@index');
