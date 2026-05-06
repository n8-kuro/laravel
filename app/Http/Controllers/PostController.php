<?php
namespace App\Http\Controllers;
class PostController extends Controller {
    public function task_30() {
          $stringus = [
            [
                1 => 'Makoto Yuki'

            ],
            [
                2 => 'Yu Narukami'
                
            ],
            [
                3 => 'Ren Amamiya'
            ]   
        ];
        return view('post.task_30', ['title'=>'number-30', 'string'=>$stringus]);
    }
    }
