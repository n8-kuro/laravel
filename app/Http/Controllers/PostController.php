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

    public function city() {
        return view('post.task_9', ['title' => 'number-9', 'city' => 'Moscow']);
    }

    public function task_10() {
        $array = [
            'Russia' => 'Moscow',
            'Finland' => 'Helsinki',
            'France' => 'Paris',
            'Spain' => 'Madrid',
            'Great Britain' => 'London',

        ];
        return view('post.task_10', ['title' => 'number-10', 'location' => $array]);
    }

    public function task_11() {
        return view('post.task_11', ['title'=>'number-11', 'year'=>'2026-', 'month'=>'04-', 'day'=>'03']);
    }

    public function task_12() {
        return view('post.task_12', ['title'=>'number-12', 'str'=>'<b>text</b>']);
    }

}