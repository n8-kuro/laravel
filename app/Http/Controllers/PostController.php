<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
        return view('post.task_1', ['title'=> 'example-1', 'var1'=>'number 1', 'var2'=>'number 2', 'var3'=>'number 3']);
    }   
}