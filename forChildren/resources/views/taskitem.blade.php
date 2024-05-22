@extends('loyauts.app')
@section('title')
    {{$task->name}}
@endsection
@section('content')
<script defer>
    let socket = new WebSocket("ws://127.0.0.1:6001/");
    socket.send('sd');
    // console.log(socket);
    
</script>
<section class="one_task">
    <div class="container">
        <div class="one_task_content">
            <div class="left_task_content">
                <div class="task_title">
             
                    <p class="title">   {{$task->name}}</p>
                    <h2 class="h2"><span class="orange">   {{$task->category->name}}</span></h2>
                </div>
                <?if(auth()->user()->role!=1){?>
                    <a href="?page=another_prof&id={{$task->author->id}}" class="user_client_link">
                        <?if(!empty($task->author->avatar)){?>
                            <img src="<?=$task->author->avatar?>" alt="" class="user_img three">
                        <?}else{?>
                            <img src="img/user_img.png" alt="" class="user_img three">
                        <?}?>    
                        <div class="client_txt">
                            <h4 class="h4"><?=$task->author->name?> <?=$task->author->surname?></h4>
                        </div>
                    </a>
                <?}?>
                <?if(!empty($task['file'])){?>
                    <a href="/storage/app/<?=$task['file']?>"><h5 class="h5">Дополнительный файл</h5></a>
                <?}?>
               
                <div class="one_task_txt">
                    <h3 class="h3">
                        <?=$task['description']?>
                    </h3>
                </div>
            </div>
            <?if(($res==null)&&(auth()->user()->role=='2')){?>
                <div class="right-task_content">
                    <h2 class="h2">Написать сообщение</h2>
                    <form action="/addRequest" method="POST" class="response">
                        @csrf
                        <input type="hidden" name="id_task" value="{{ $task->id }}">
                        <textarea  class="response_input" placeholder="Введите текст..." name="Message"></textarea>
                        <input type="submit" class="btn_one" value="Отправить" name="responce">
                    </form>
                </div>
           
                <?}elseif((auth()->user()->role=='1') && (auth()->user()->id==$task->author_id) && (($task->status==0))){?>
                    <div class="right-task_content">
                        <a href="?page=edit_task&id=<?=$task['id']?>">
                            <div class="btn_one">
                                <h6 class="h6med">Редактировать</h6>
                            </div>
                        </a>
                        <br>
                        <a href="?page=delete_task&id=<?=$task['id']?>">
                            <div class="btn_one">
                                <h6 class="h6med">Удалить</h6>
                            </div>
                        </a>
                    </div>
                <?}elseif((auth()->user()->role=='1') && (auth()->user()->id==$task->author_id) && ($task->status==1)){?>
                    <div class="right-task_content">
                        <a href="/chat/{{$res->id}}">
                            <div class="btn_one">
                                <h6 class="h6med">Перейти в чат</h6>
                            </div>
                        </a>
                    </div>
                 <?}else{?>
                    <div class="right-task_content">
                        <a href="/chat/{{$res->id}}">
                            <div class="btn_one">
                                <h6 class="h6med">Перейти в чат</h6>
                            </div>
                        </a>
                    </div>
                 <?}?>    
          
            
        </div>
    </div>
</section>
@endsection