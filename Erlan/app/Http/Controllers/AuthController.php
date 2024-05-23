<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\EditProfileRequest;
use App\Http\Requests\changePassRequest;
use Carbon\Carbon;
class AuthController extends Controller
{
    //
    public function signUpUser(SignUpRequest $request)
    {


        $data = $request->validated();
        
        $data['password'] = Hash::make($data['password']);

        User::query()->create($data);

        return redirect('/sign-in');
    

    }

    public function signInUser(SignInRequest $request)
    {
     

        $data = $request->validated();
        if(!auth()->attempt($data)) {
            return back()->withInput()->withErrors(['invalid_credentials' => 'Неверный пароль']);

        }
        return redirect('/profile');

  
      
    }
    public function editProfile(EditProfileRequest $request)
    {

        $data=$request->validated();
        User::where('id',auth()->user()->id)->update($data);
        return redirect('/profile');

    }

    public function logout() {

        auth()->logout();

        return redirect('/');

    }

    public function delProfile(){
        $user = User::where('id',auth()->user()->id);
        auth()->logout();
        $user->delete();
        return redirect('/');

    }


    public function ban(User $user){
        $currentDateTime=Carbon::now('Europe/Moscow');
        $dateTime = $currentDateTime->format('d.m.y');
        $user->update([
            'status'=>0,
            'data_ban'=>$dateTime
        ]);
        return redirect('/profile');
    }

    
    public function unban(User $user){
        $user->update([
            'status'=>1,
            'data_ban'=>null
        ]);
        return redirect('/profile');
    }


    public function changePass(changePassRequest $request){

        $data = $request->validated();
  
        if(!Hash::check($data['old_password'], auth()->user()->password)){
            return back()->withInput()->withErrors(['invalid_credentials' => 'Неверный пароль']);
        }
        return redirect('/profile');

    }
}
