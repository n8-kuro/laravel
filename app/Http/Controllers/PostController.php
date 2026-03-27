<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
    $employers = [
        'name' => 'Bob',
        'age' => 19, 
        'salary' => 2000,
    ];
    return view('post.task_7', [
        'title' => 'number-7', 
        'employers' => $employers
    ]);
}

}