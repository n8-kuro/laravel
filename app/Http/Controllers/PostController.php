<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
    $array = [
        1 => 1,
        'el2' => 2, 
        'el3' => 3,
        'el4' => 4,
        'el5' => 5,
    ];
    return view('post.task_8', [
        'title' => 'number-8', 
        'array' => $array
    ]);
}
    public function city() {
        return view('post.task_9', ['title' => 'number-9', 'city' => 'Moscow']);
    }

}