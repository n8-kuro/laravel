<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
        return view('post.task_1', ['title'=> 'number-1', 'name'=>'Ruslan', 'age'=>'19', 'salary'=>'0 $']);
    }   
}