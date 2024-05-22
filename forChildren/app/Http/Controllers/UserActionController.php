<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\BalanceRequest;
use Illuminate\Support\Facades\Validator;



class UserActionController extends Controller
{
    //

    public function addBalance(BalanceRequest $request){
        
        $data=$request->validated();
        $user = User::where('id',auth()->user()->id)->first();

        $user->update(['money'=>auth()->user()->money+$data['money']]);
        
        return redirect('/profile');

    
    }

}
