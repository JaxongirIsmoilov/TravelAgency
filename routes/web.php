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

Route::get('/', function () {
    return view('index');
});


Route::get('/fb', function () {

    $fb = new \Facebook\Facebook([
        'app_id' => env('FACEBOOK_CLIENT_ID'),
        'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'default_graph_version' => 'v3.2',
        //'default_access_token' => '{access-token}', // optional
    ]);

    $fb->setDefaultAccessToken('EAACoQ0yozj4BAKwk1Os7ZBZCZBjLZA8VSZCjZAlsVwLvnyubif0TwVk68l9E4CbDGYjw0zHx19S5e3bsssNNt9rWgSoYcmySathMoBra1XfXFCZBI17LQKmYkkdBgCnU7fBLQwzTUGFRBZAe2UbRDDl9FRon7YXBKxqstKwVZCM8jOyxpywiZAPvdnmKe7IDTJZCSO0opoQ3bZAdtwZDZD');

    dd($fb->get('me?fields=id,name')->getDecodedBody());

});




Route::get ('/index', ['uses' => 'MainController@show']);
Route::get ('/blog', ['uses' => 'MainController@show2']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
