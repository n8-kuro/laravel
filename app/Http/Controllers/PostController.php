<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function show() {
    $array = [
        'el1' => 1,
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

}