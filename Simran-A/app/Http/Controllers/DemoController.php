<?php

namespace App\Http\Controllers; //namespace: virtual folder structure

use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    public function demo(){
        return "Hello";
    }
    public function democ(){
        return "yoo hello world laravel";
    }
    // public function demo(){
    //     return view('newfolder.InnerFolder.newfile3');
    // }
    public function parameter($id,$id2){
        $sum=$id+$id2;
        return $sum;
    }
    public function greater($id,$id2){
        if($id>$id2){
            return $id." is greater";
        }
        else{
            return $id2." is greater";
        }
        
    }
    public function smallest($id,$id2){
        if($id<$id2){
            return $id." is smaller";
        }
        else{
            return $id2." is smaller";
        }
        
    }
}