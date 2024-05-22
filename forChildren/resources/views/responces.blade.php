
@extends('loyauts.app')
@section('title')
Отклики
@endsection
@section('content')
<?php
function formatDate($date, $format = "d.m.Y H:i"){
    return date($format, strtotime($date));
}?>
<div class="wrapper">
    <section class="journal">
        <div class="container">
            <div class="journal_top">
                <p class="title"> Мои задания</p></div>
                <div class="nav_smart_my_task">
                    <a href="?page=responces&status=1" class="filter_link"><h6 class="h6">Отклики </h6></a>
                    <a href="?page=responces&status=2" class="filter_link"><h6 class="h6">В задании </h6></a>
                    <a href="?page=responces&status=0" class="filter_link"><h6 class="h6">Завершенные</h6></a>
                </div>
            <div class="journal_content">
                <div class="tasks_list">
                        <?foreach ($res as $responses):?>
                            
                            <a href="/chat/{{$responses->id}}" class="task_block">
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
                                    <h3 class="h3"><?=$responses->user->name?></h3>
                                    <h6 class="h6"><?=$responses->task->name?></h6>
                                    <?if($responses['status']=='1'){?>
                                        <h6 class="h6">Выполнить до <span class="yellow"><?=$date_d?></span></h6>
                                    <?}elseif($responses['status']=='2'){?>
                                        <?if(($days>0)||($hours>0)||($minutes>0)){?>
                                            <h6 class="h6">Осталось времени на выполнение: <span class="yellow"><?=$days . 'д. ' .$hours . 'ч. ' .$minutes .'мин.'?></span></h6>
                                        <?}else{?>
                                            <h6 class="h6"><span class="red">Время истекло</span></h6>
                                        <?}?>        
                                    <?}?>
                                    <h6 class="h6"><?if($responses['status']=='1'){echo 'В ожидании';}elseif($responses['status']=='2'){echo 'В задании';}elseif($responses['status']=='0'){echo 'Завершенно';}?></h6>
                                </div>    
                            </a>
                            <?if($responses['status']=='1'){?>  <span class="yellow"><h6 class="h6"><a href="?page=responces&id_task=<?=$responses->task->id?>&id=<?=$responses['id']?>&yes">Назначить</a> | <a href="?page=responces&id=<?=$responses['id']?>&no">отклонить</a></h6></span><br><?}elseif($responses['status']=='0'){?><span class="yellow"><h6 class="h6"><a href="?page=review&id_user=<?=$user['id']?>">Оставить отзыв об исполнителе</a></h6></span><?}elseif($responses['status']=='2'){?><span class="yellow"><h6 class="h6"><a href="?page=responces&id_user=<?=$user['id']?>&id_task=<?=$task['id']?>&id=<?=$responses['id']?>&yes2">Выполненно</a> | <a href="?page=responces&id_task=<?=$task['id']?>&id=<?=$responses['id']?>&no2">Снять с задания</a></h6></span><?}?><br>
                            
                        <?endforeach;?>
                        <?if(!empty($error)){echo '<h6 class="h6"><span class ="red">'.$error.'</span><h6>';}?>
                   
                </div>
                <div class="filter_bar">
                        <div class="bar_sticky">
                        <a href="?page=responces&status=1" class="filter_link"><h6 class="h6">Отклики</h6></a>
                        <a href="?page=responces&status=2" class="filter_link"><h6 class="h6">В задании</h6></a>
                        <a href="?page=responces&status=0" class="filter_link"><h6 class="h6">Завершенные</h6></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer_content">
                <a href="" class="logo_link">
                    <img src="img/logo.svg" alt="" class="logo">
                </a>
                <ul class="header_menu">
                    <li class="header_item">
                        <a href="" class="header_link">
                            <h6 class="h6">
                                Задания
                            </h6>
                        </a>
                    </li>
                    <li class="header_item">
                        <a href="" class="header_link">
                            <h6 class="h6">
                                Чат
                            </h6>
                        </a>
                    </li>
                    <li class="header_item">
                        <a href="" class="header_link">
                            <h6 class="h6">
                                Отзывы
                            </h6>
                        </a>
                    </li>
                </ul>
                <a href="" class="profile_link">
                    <img src="img/profile.svg" alt="" width="23px">
                </a>
            </div>
            <p class="small_txt">
                © 2013-2023 Индивид<br>
                Все права защищены.<br>
                Договор публичной оферты<br>
                Политика конфиденциальности
            </p>
        </div>
    </footer>
</div>

@endsection('content')