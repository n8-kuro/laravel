<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
        return view('post.task_3', ['title'=> 'number-3', 'name'=>'name:' , 'age'=>'age:', 'favgame'=>'favgame:']);
    }   
}