@extends('loyauts.app')
@section('title')
Мои задания
@endsection
@section('content')
<?php
function formatDate($date, $format = "d.m.Y H:i"){
    return date($format, strtotime($date));
}?>
<section class="journal">
    <div class="container">
        <div class="journal_top">
            <p class="title"> Мои задания</p><?if(auth()->user()->role=='1'){?><a href="/add-task" class="btn_one"><h6 class="h6">Добавить задание</h6></a><?}?></div>
            <?if(auth()->user()->role==2){?>
        <div class="nav_smart_my_task">
            <a href="?page=my_task&status=1" class="filter_link"><h6 class="h6">Отклики</h6></a>
            <a href="?page=my_task&status=2" class="filter_link"><h6 class="h6">В задании</h6></a>
            <a href="?page=my_task&status=0" class="filter_link"><h6 class="h6">Завершенные</h6></a>
        </div>
        <?}?>
        <div class="journal_content">
       
        <?if(auth()->user()->role=='1'){?>
            <div class="tasks_list">
                    <?foreach ($tasks as $task):?>
                        <a href="/task/<?=$task['id']?>" class="task_block">
                            <h3 class="h3">{{$task->name}}</h3>
                            <span class="yellow">
                                <h6 class="h6"><?=$task['cost']?>р/заказ</h6>
                            </span>
                        </a>
                <?endforeach;?>
            </div>
                <?}else{?>
                 
                    <div class="tasks_list">
                    <!-- <h5 class="h5">В задании</h5><br> -->
                    <?foreach ($res as $responses):?>
    
                    <a href="/task/{{$responses->task->id}}" class="task_block">
                    <?$date_t = $responses->task->date.''.$responses->task->time;
                    $date_d = formatDate($date_t);
                    $deadline = strtotime($date_d);
                    $today = strtotime(date("d.m.Y H:i"));
                    $time_ost = ($deadline+18000) - $today;
                    $years = floor($time_ost / (365*60*60*24)); 
                    $months = floor(($time_ost - $years * 365*60*60*24)/ (30*60*60*24)); 
                    $days = floor(($time_ost - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
                    $hours = floor(($time_ost - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24)/ (60*60));
                    $minutes = floor(($time_ost - $years * 365*60*60*24 - $months*30*60*60*24- $days*60*60*24 -$hours*60*60)/ (60));?>
                        <div>
                            <h3 class="h3"><?=$responses->task->name?></h3>
                            <?if($responses['status']=='1'){?>
                                <h6 class="h6">Выполнить до <span class="yellow"><?=$date_d?></span></h6>
                            <?}elseif($responses['status']=='2'){?>
                                <?if($time_ost>0){?>
                                    <h6 class="h6">Осталось времени на выполнение:<span class="yellow"><?=$days . 'д. ' .$hours . 'ч. ' .$minutes .'мин.'?></span></h6>
                                <?}else{?>
                                    <h6 class="h6"><span class="red">Время истекло</span></h6>
                                <?}?>        
                            <?}?>
                        </div>
                        <div>
                        <h6 class="h6"><?if($responses['status']=='1'){echo 'В ожидании';}elseif($responses['status']=='2'){echo 'В задании';}elseif($responses['status']=='0'){echo 'Завершенно';}?></h6>
                        <span class="yellow">
                            <h6 class="h6">  <?=$responses->task->cost?>р/заказ</h6>
                        </span>
                        </div>
                    </a>
                    <?if($responses['status']=='0'){?>
                        <span class="yellow"><h6 class="h6"><a href="?page=review&id_user=<?=$task['author_id']?>">Оставить отзыв о заказчике</a></h6></span><br>
                    <?}?>    
                <?endforeach;?>
                    </div>
            <div class="filter_bar">
                <div class="bar_sticky">
                <a href="?page=my_task&status=1" class="filter_link"><h6 class="h6">В ожидании</h6></a>
                <a href="?page=my_task&status=2" class="filter_link"><h6 class="h6">В задании</h6></a>
                <a href="?page=my_task&status=0" class="filter_link"><h6 class="h6">Завершенные</h6></a>
                </div>
            </div>
                <?}?>
          
        </div>
    </div>
</section>

@endsection