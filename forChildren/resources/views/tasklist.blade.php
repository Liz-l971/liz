@extends('loyauts.app')
@section('title')
    Все задания
@endsection
@section('content')

<?php

function formatDate($date, $format = "d.m.Y H:i"){
    return date($format, strtotime($date));
}
?>

<section class="journal">
    <div class="container">
        <div class="journal_top">
            <p class="title"> Все задания</p>
            <button class="btn_two" id="filter"><h6 class="h6">Фильтр</h6></button>
        </div>
        <div class="journal_content">
            <div class="tasks_list">
                <?if(empty($tasks)){?>
                    <h3 class="h3">Ничего не найдено по выбранной категории :(</h3>
                <?}?>
                <?foreach ($tasks as $task):?>
                    <?$date_t = $task['date'].''.$task['time'];
                    $date_d = formatDate($date_t);?>
                    <a href="/task/<?=$task['id']?>" class="task_block">
                        <div>
                            <h3 class="h3"><?=$task['name']?></h3>
                            <h6 class="h6">Выполнить до <span class="yellow"><?=$date_d?></span> </h6>
                        </div>
                        <span class="yellow">
                            <h6 class="h6"><?=$task['cost']?>р/заказ</h6>
                        </span>
                    </a>
                <?endforeach;?>
            </div>
            <div class="filter_bar">
                <div class="bar_sticky">
                <a href="?page=task_list" class="filter_link"><h6 class="h6">Всё</h6></a>
                    <?foreach ($categorys as $category):?>
                        <a href="?page=task_list&category=<?=$category['id']?>" class="filter_link"><h6 class="h6"><?=$category['name']?></h6></a>
                    <?endforeach;?>
                </div>
            </div>
         
        </div>
    </div>
  
</section>
<div class="filter_bar_smartfone" >
                <div class="bar_sticky">
                <a href="?page=task_list" class="filter_link"><h6 class="h6">Всё</h6></a>
                    <?foreach ($categorys as $category):?>
                        <a href="?page=task_list&category=<?=$category['id']?>" class="filter_link"><h6 class="h6"><?=$category['name']?></h6></a>
                    <?endforeach;?>
                </div>
    </div>
    @endsection('content')