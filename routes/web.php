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
  /**
   * Home
   */
  Route::get('/', function () {
      return view('welcome');
  })->name('home');

  /**
   * Authentication
   */
  Route::post('/signup', [
      'uses' => 'UserController@postSignUp',
      'as' => 'signup',
  ]);

  Route::post('/signin', [
      'uses' => 'UserController@postSignin',
      'as' => 'signin',
  ]);

  Route::get('/logout', [
      'uses' => 'UserController@getLogout',
      'as' => 'logout'
  ]);

  /**
   * Search
   */
  Route::get('/search', [
      'uses' => 'SearchController@index',
      'as' => 'search.results',
  ]);
    // Comments
    Route::post('/comment', function(\Illuminate\Http\Request $request) {
      return response()->json(['message' => $request['postId']]);
    })->name('comment');

    // Route::post('/comment', [
    //   'uses' => 'CommentsController@store',
    //   'as' => 'comment'
    // ]);

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
});
