<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
public function show(){
    return view('index');
}
public function show2(){
    return view('blog');
}
}
