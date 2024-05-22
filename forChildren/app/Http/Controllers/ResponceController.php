<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responce;
use App\Models\Message;
use App\Http\Requests\ResponceRequest;
use App\Models\Task;

class ResponceController extends Controller
{
    //
    public function addRequest(ResponceRequest $request){

        $data = $request->validated();
        $task = Task::where('id',$request->id_task)->first();
        $responce = Responce::create([
            'id_task'=> $request->id_task,
            'id_user' =>auth()->user()->id,
            'id_get' => $task->author_id,
            'status'=>1
        ]);
        Message::create(
            [
                'UserId' => auth()->user()->id,
                'Message' => $request->Message,
                'ChatRoom' =>$responce->id,
            ]
        );

        return redirect('/task-list');
    }
        
}
