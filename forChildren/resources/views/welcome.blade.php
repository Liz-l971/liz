@extends('loyauts.app')
@section('title')
FreeWork
@endsection
@section('content')

<section class="banner">
    <div class="container">
        <div class="banner_content">
            <div class="banner_txt">
                <h1 class="h1">Миллионы<br>испольнителей<br>ждут вас!</h1>
                <div class="btns">
                    <a href="?page=signup" class="btn_one"><h6 class="h6">Разместить заказ</h6></a>
                    <a href="?page=signup" class="btn_two"><h6 class="h6">Стать исполнителем</h6></a>
                </div>
            </div>
            <img src="/img/banner_img.png" alt="" class="banner_img" >
        </div>
    </div>
</section>
<section class="nav_tasks">
    <div class="container">
        <div class="nav_tasks2">
            <p class="title">Какую задачу необходимо выполнить?</p>
            <div class="nav_tasks_content">
                @foreach ($categories as $item)
                    <a href="/sign-in" class="link_nav"><h5 class="h5">{{$item->name}}</h5></a>
                @endforeach
             
            </div>
        </div>
    </div>
</section>
@endsection
