<?php

Route::group(['middleware' => 'web', 'prefix' => 'posts', 'namespace' => 'Modules\Posts\Http\Controllers'], function()
{
    // Route::get('/', 'PostsController@index');
    Route::resource('posts','PostsController');


	Route::get('/poststables','PostsDataTableController@index');
	Route::get('/anyData','PostsDataTableController@anyData')->name('poststables.data');
});
