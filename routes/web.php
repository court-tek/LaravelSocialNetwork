<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::post('/signup', [
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);

    Route::post('/signin', [
        'uses' => 'UserController@postSignin',
        'as' => 'signin'
    ]);

    Route::get('/dashboard/{slug}', [
      'uses' => 'UserController@getDashboard',
      'as' => 'dashboard'
    ])->middleware('auth')->where('slug', '[\w\d\-\_]+');

    Route::get('/timeline', [
      'uses' => 'PostController@getTimeline',
      'as' => 'timeline'
    ]);

    Route::post('/createpost', [
      'uses' => 'PostController@postCreatePost',
      'as' => 'post.create'
    ]);

    Route::post('comments/{post_id}', [
      'uses' => 'CommentsController@store',
      'as' => 'comments.store'
    ]);
});
