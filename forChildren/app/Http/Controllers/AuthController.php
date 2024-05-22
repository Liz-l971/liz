<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\SignInRequest;

class AuthController extends Controller
{

    
    public function signUpUser(SignUpRequest $request)
    {


        $data = $request->validated();
        
        $data['password'] = Hash::make($data['password']);

        User::query()->create($data);

        return redirect('/');
    

    }

    public function signInUser(SignInRequest $request)
    {
     

        $data = $request->validated();
        if(!auth()->attempt($data)) {
            return back()->withInput()->withErrors(['invalid_credentials' => 'Неверный пароль']);

        }
        return redirect('/');

  
      
    }

    public function logout() {

        auth()->logout();

        return redirect('/');

    }

    

}
