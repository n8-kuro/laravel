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

    public function task_14() {
        return view('post.task_14_15_16', ['title'=>'number-14-15-16', 'age'=> 19]);
    }

    public function task_17() {
        return view('post.task_17', ['title'=>'number-17', 'age'=>18]);
    }

    public function task_18() {
        $array2 = [
        'n1' => 9,
        'n2' => 11, 
        'n3' => 10,
        'n4' => 40,
        'n5' => 30,
    ];
    return view('post.task_18', [
        'title' => 'number-18', 
        'array' => $array2
    ]);
    }

    public function task_19() {
        $array3 = [
            'q1' => 1,
            'q2' => 1,
            'q3' => 2,
            'q4' => 3,
            'q5' => 5,
            'q6' => 8,
            'q7' => 13,
        ];
    return view('post.task_19', [
        'title' => 'number-19-21',
        'array' => $array3
    ]);
    }
    
    public function task_22(){
        $str = [
            'Num-5' => 'Final Fantasy 13',
            'Num-4' => 'Disco Elysium',
            'Num-3' => 'Life is Strange',
            'Num-2' => 'Trails in the Sky FC',
            'Num-1' => 'Clair Obscur: Expedition 33',
        ];

        return view('post.task_22', [
            'title' => 'number-22',
            'strings' => $str
        ]);
    }

    public function task_24() {
        $array4 = [
            'z1' => 1,
            'z2' => 2,
            'z3' => 3,
            'z4' => 5,
            'z5' => 8,
            'z6' => 13,
            'z7' => 21,
            'z8' => 34,
            'z9' => 55,
            'z10' => 89,
        ];

        return view('post.task_24', [
            'title' => 'number-24',
            'array' => $array4,
        ]);
    }

    public function task_25() {
        $data1 = [
            's1' => 1,
            's2' => 2,
            's3' => 3,
            's4' => 5,
            's5' => 8,
            's6' => 13,
            's7' => 21,
            's8' => 34,
            's9' => 55,
            's10' => 89,
        ];
        return view('post.task_25', ['title'=>'number-25', 'data'=>$data1 ]);
    }

}