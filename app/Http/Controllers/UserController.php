<?php
namespace App\Http\Controllers;

class UserController extends Controller {
    public function show1() {
        return view('post.user_1', ['title' => 'User_1', 'text' => 'Good', 'user' => 'Billy Bob']); 
    }
    public function show2() {
        return view('post.user_2', ['title' => 'User_2', 'text' => 'Old', 'user' => 'McCarty Joe']); 

    }
    public function show3() {
        return view('post.user_3', ['title' => 'User_3', 'text' => 'Legend', 'user' => 'Joel Miller']); 
    }
}
