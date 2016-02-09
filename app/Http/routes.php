<?php


//marketing
Route::get('/', 'MarketingController@index');


//blog
Route::get('test', 'BlogsController@test');
Route::get('/blog', 'BlogsController@index');
Route::get('/blog/create', 'BlogsController@create');
Route::post('/blog/create', 'BlogsController@store');
Route::get('/blog/{id}', 'BlogsController@read');




