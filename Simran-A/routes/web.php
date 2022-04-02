<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\DemoController2;
use App\Http\Controllers\DemoController3;
use App\Http\Controllers\NewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    $i=3;
    return view("newfile");
});

Route::get('/abc', function () {
    return view("newfile2");
});

Route::get('/world', function () {
    return view("newfolder.InnerFolder.newfile3");
});

Route::get('/heyy/{id}', function ($id) {
    return $id;
});

Route::get('/greater/{id}/{id2}', function ($id,$id2) {
    ($id>$id2)?$g= $id:$g= $id2;
    return $g." is the greatest";
});

Route::get('/sum/{id}/{id2}', function ($id,$id2) {
    $sum=$id+$id2;
    return "Sum: ".$sum;
});

Route::get('/subtract/{id}/{id2}',function ($id,$id2){
    $sub=$id-$id2;
    return "Subtraction: ".$sub;
});

Route::get('/demoo',[DemoController::class,'demo']);
Route::get('/ourdemo',[DemoController::class,'democ']);

Route::get('/demoparameter/{id}/{id2}',[DemoController::class,'parameter']);
Route::get('/demogreater/{id}/{id2}',[DemoController::class,'greater']);
Route::get('/smaller/{id}/{id2}',[DemoController::class,'smallest']);
Route::get('/OddOrEven/{n}',[DemoController2::class,'oddeven']);

Route::get('/getOddEven/{id5}',[DemoController2::class,'getOddEven']);
Route::get('/getGreater/{a}/{b}',[DemoController3::class,'getGreater']);
Route::get('/getPrime/{n}',[DemoController3::class,'getPrime']);
Route::get('/printArray',[NewController::class,'passArray']);

Route::get('/create-register',[UserController::class,'registerView']);

Route::post('/register/store',[UserController::class,'store'])->name('register.store');

Route::get('/login-view',[UserController::class,'loginView'])->name('register.login.view');
Route::post('/login-check',[UserController::class,'login'])->name('login.check');
Route::post('/register/login',[UserController::class,'login'])->name('register.login');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/view-todo-list',[TodoController::class,'create'])->name('todolist');
Route::post('/todo-store',[TodoController::class,'store'])->name('todolist.store');

Route::get('todo/edit/{id}',[TodoController::class,'edit'])->name('todo.edit');
Route::post('todo/update/{id}',[TodoController::class,'update'])->name('todo.update');

