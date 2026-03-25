<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
        return view('post.task_2', ['title'=> 'number-2', 'var'=>'color:red' , 'age'=>'19', 'salary'=>'0 $']);
    }   
}