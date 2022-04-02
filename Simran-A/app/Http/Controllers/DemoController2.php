<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController2 extends Controller
{
    public function oddeven($n){
        if($n%2==0){
            return $n." is Even";
        }
        else{
            return $n." is Odd";
        }
    }

    public function getOddEven($id5){
        return view('oddeven',compact('id5'));
    }
}
