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
Auth::routes();

Route::get('/', function () {
    return view('home');
});



/*Route::get('/fb', function () {

    $fb = new \Facebook\Facebook([
        'app_id' => env('FACEBOOK_CLIENT_ID'),
        'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'default_graph_version' => 'v3.2',
        //'default_access_token' => '{access-token}', // optional
    ]);

    $fb->setDefaultAccessToken('EAAhh9ZA9GHysBAEqndsYAhaalFx4zqbL2KZCXc9lb7sOYUKieuy4bkZCcjZCXfnyGmywC22YXizT9PengZAcG9AIKJWMibpZC5ZCMrxra76egaKmTmfLDLy3x5LEhLvALqP0EzX3OKaVLNj26bLx2p2kZBhBikf1knniquvoOVwcjz2mxFijokMQka9iLKbBqeYZD');

    dd($fb->get('me?fields=id,name,posts,tagged_places{place},hometown,location,likes,photos')->getDecodedBody());

});*/





Route::get ('/index', ['uses' => 'MainController@show']);
Route::get ('/blog', ['uses' => 'MainController@show2']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
