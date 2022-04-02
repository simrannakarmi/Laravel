<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function passArray(){
        return view('Array',["array" => ['1','2','3','4']]);
    }
}
