<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
        return view('post.task_5', ['title'=>'number-5', 'text'=>'GitHub', 'href'=>'https://github.com/n8-kuro/laravel']);
    }   
}