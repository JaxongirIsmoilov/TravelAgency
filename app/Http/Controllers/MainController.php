<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facebook;

class MainController extends Controller
{
public function show(){
    return view('index');
}
public function show2(){

    $fb = new \Facebook\Facebook([
        'app_id' => env('FACEBOOK_CLIENT_ID'),
        'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'default_graph_version' => 'v3.2',
        //'default_access_token' => '{access-token}', // optional
    ]);

    $fb->setDefaultAccessToken('EAAhh9ZA9GHysBAHxWFxjCQ0Vnv0BDV6ZCTDRGSlLF8o113H7AUJcdSJDwAckkzwFLMQOKoPMllhMOwAwDlEnZCdLP4phKZBR0tnvodq1OT51rIKDDZBZBbytgqrE4xVHGZB1HdZAwqihjABoijKuZCCIJcBZB37en4JZCZBsSQAHVmSZCVKJEEq9v1dRc1OdpF78AUibNz7x6NbUKOQZDZD');

     $fb->get('me?fields=id,name,posts,tagged_places{place},hometown,location,likes,photos')->getDecodedBody();
    $facebook = Facebook::all();

    $data = [
      'name' => $fb->get('name'),
      'photos' => $fb->get('photos'),
      'friends' => $fb->get('friends'),
      'city'  => $fb->get('location'),
      'region' => $fb->get('hometown')
    ];

    return view('blog', compact($data));
}
}
