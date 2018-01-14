<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
Route::get('/hello', function () {
    //return view('welcome');
    return 'Hello World';
});
*/
/*
Route::get('/users/{id}/{name}',function($id, $name){
    return 'This is user ' .$name. ' with an id of '.$id;

}); */
Route::get('/','PagesController@index');
Route::get('/services','PagesController@services');
Route::get('/about','PagesController@about');

Route::resource('posts', 'PostController');