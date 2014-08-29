<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('master','AdminsController@getMaster');
Route::get('login','AdminsController@getLogin');
Route::post('login', 'AdminsController@postLogin');
Route::get('register','AdminsController@getRegister');
Route::post('register', 'AdminsController@postRegister');
Route::get('logout','AdminsController@logout');
Route::get('/','SiteController@getHome');
Route::get('/about','SiteController@getAbout');
Route::get('/blog','SiteController@getBlog');


Route::get('blog/{slug}', function($slug){

	$post = Post::where('slug', $slug)->first();

	$date = $post->created_at;
	setlocale(LC_TIME, 'America/New_York');
	$date = $date->formatlocalized('%A %d %B %Y');

	return View::make('sites.post')->with('post', $post)->with('date', $date);
});


Route::group(array('before' => 'auth'), function()
{   
    Route::get('manager','ManagerController@getIndex');
    Route::get('manage','ManagerController@getManageUser');
    Route::resource('posts','PostController');
   //Route::get('addpost','PostController@create');

  
});