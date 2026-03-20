<?php
namespace App\Http\Controllers;

// class PostController extends Controller {
//     public function show(){
//         return view('test');
//     }
// }

// Задание 1
// class PostController extends Controller {
//     public function show() {
//         return view('mlp');
//     }
// }
// Задание 2
// class PostController extends Controller {
//     public function show() {
//         return view('bb', ['var1' => 'Bob', 'var2'=>'Billy']);
//     }
// }
// Задание 4
class PostController extends Controller {
    public function show() {
        return view('post.siteex', ['title' => 'Bob', 'text' => 'Billy', 'user' => 'Batman']); 
    }   
}