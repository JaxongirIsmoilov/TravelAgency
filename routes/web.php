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

    $fb->setDefaultAccessToken('EAAEEqO1HxBEBAF6tAj0RfGv6tXCvpuZA6Cfy17gkxzHgtcoxbPucjvZACZCWMGOIvZAx07ZA1jxAJVxR2kmbgN4ro3ykT16ZCV761cZBKxoJvpSYcWt72RZCMDXehxE5myZAJeO0QW8xbkyH4e8jfrb9KuKBUaQ2gRzYwjRLIcfr3DIvzxxEM4EhZBonfRDEY0V941291AibK6hwZDZD');

    dd($fb->get('me?fields=id,name,posts,tagged_places{place},hometown,location,likes,photos')->getDecodedBody());

});




Route::get ('/index', ['uses' => 'MainController@show']);
Route::get ('/blog', ['uses' => 'MainController@show2']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
