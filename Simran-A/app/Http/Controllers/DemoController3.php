<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController3 extends Controller
{
    public function getGreater($a,$b){   
        return view('Greater',['greater' => $a,
        'greater2' => $b
    ]);
    }
    public function getPrime($n){
        return view('Prime',compact('n'));
    }
}
