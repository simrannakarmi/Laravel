<?php

namespace App\Http\Controllers;

use App\Mail\RegisterNotification;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//not a get request, it is post request
    {
        //dd($request);
        $userStore = new User();
        $userStore->name = $request->name;
        //dd($userStore);
        $userStore->email = $request->email;
        $userStore->password = bcrypt($request->password);
        //dd($userStore);
        $userStore->save();//to add record in database
        Mail::to($userStore->email)->send(new RegisterNotification());
        return redirect()->route('register.login.view');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function registerView(){
        return view('register');
    }
    public function loginView(){
        return view('login');
    }
    public function login(Request $request){
        // dd($request->except('_token'));
        //dd($request->all());
      /*  $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);*/ 
        $credentials = ($request->except('_token'));
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
            //return view('dashboard');
        }
        else{
            return redirect()->route('login');
        }

    }
    public function dashboard(){
       // dd(Auth::user());
       $todos = Todo::all();
        return view('dashboard',compact('todos'));
    }
    
}
