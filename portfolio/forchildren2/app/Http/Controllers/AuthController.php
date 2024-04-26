<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\auth\RegisterRequest;
use App\Models\User;
use App\Http\Requests\auth\LoginRequest;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login() {

        return view('login');

    }
    public function signUp(){
        return view('signUp');
    }

    public function registr(RegisterRequest $registerRequest) {
        $data = $registerRequest->validated();
        $user = User::query()->create($data);

        auth()->login($user);
        
        return redirect()->route('welcome.welcome');
    }
    public function loginSession(LoginRequest $request) {
        $data = $request->validated();
        if(!auth()->attempt($data)) {
            return back()->withInput()->withErrors(['invalid_credentials' => 'Неверный пароль']);

        }
        return redirect()->route('welcome.welcome');

    }

    public function logout() {

        auth()->logout();

        return redirect()->route('welcome.welcome');

    }
}
