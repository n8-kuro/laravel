<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
    return view('post.task_6', ['title'=>'number-6', 'date'=>'27.03.2026',]);
    }   
}