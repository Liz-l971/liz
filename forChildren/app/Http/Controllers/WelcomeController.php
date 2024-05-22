<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Task;
use App\Models\Responce;

class WelcomeController extends Controller
{
    public function welcome(){
        $categories = Categories::all();
        return view('welcome',compact('categories'));
    }

public function profile(){
    return view('profile');
}

    public function signUp(){
        return view('signUp');
    }
    public function signIn(){
        return view('signin');
    }
    public function myTask(){
        $tasks = Task::where('author_id',auth()->user()->id)->get();
        // var_dump($tasks);
        $res = Responce::where('id_user',auth()->user()->id)->get();

        return view('mytask',compact('tasks','res'));
    }

    public function responces(){

        $res = Responce::where('id_get',auth()->user()->id)->get();
        return view('responces',compact('res'));
    }
    public function taskItem(Task $task){

        $res = Responce::where('id_task',$task->id)->where('id_user', auth()->user()->id)->first();

        return view('taskitem',compact('task','res'));
        
    }
    public function addTask(){
        $categories  = Categories::all();
        return view('tasks.addtask',compact('categories'));
    }

    public function taskList(){
        $categorys = Categories::all();
        $tasks = Task::where('status', '0')
        ->where('author_id', '!=', auth()->user()->id)
        ->orderBy('id', 'DESC')
        ->get();
        return view('tasklist', compact('categorys','tasks'));
    }
}
