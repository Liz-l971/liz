<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    //

    public function welcome(){
        return view('welcome');
    }

public function profile(){
    if(auth()->user()->status!=2){
        return view('pages.profile');

    }else if(auth()->user()->status==2){
        $users = User::where('status',1)->get();
        $usersB = User::where('status',0)->get();
        return view('pages.admin',compact('users','usersB'));
    }
}

    public function signUp(){
        return view('pages.signup');
    }
    public function signIn(){
        return view('pages.signin');
    }

    public function hotel(){
        return view('pages.hotel');
    }
    public function flight(){
        return view('pages.flight');
    }
    public function addturist(){
        return view('pages.addturist');
    }
}
