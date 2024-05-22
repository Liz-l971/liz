<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;
use App\Http\Requests\AddTaskRequest;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Models\Responce;
use DateTime;

class TaskController extends Controller
{
    //

    public function  showCategories(){
        return response()->json(Categories::all());
    } 
    
    public function  taskList(){

        return response()->json(Task::all());
    }

    public function addTask(AddTaskRequest $request)
    {
       

        $data = $request->validated();

        $data['author_id'] = auth()->user()->id;
        if ($request->hasFile('file')) {
            $data['file'] = $request->file('file')->store('public/tasks'); 
        }else{
            $data['file'] =null;
        }

        if (new DateTime($data['date'].' '.$data['time']) < new DateTime()) {
            return back()->withInput()->withErrors(['invalid_date' => 'Срок выполненния задания не может быть в прошедшем времени']);
        
        }else if($data['cost']>auth()->user()->money){
            return back()->withInput()->withErrors(['invalid_balance' => 'Недостаточно средств']);
        }else{
            Task::query()->create($data);
            return redirect('/my-task');
        }
     
    }
}
