<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    public function home(){
        return view('Pages.home');
    }
    public function tasks_list(){
        $tasks=[
            ['title'=>'Task Name 1', 'count'=>'230' ],
            ['title'=>'Task Name 2', 'count'=>'500' ],
            ['title'=>'Task Name 3', 'count'=>'219' ],
            ['title'=>'Task Name 4', 'count'=>'200' ]
        ];
        return view('Pages.task', ['tasks'=>$tasks]);
    }
}
