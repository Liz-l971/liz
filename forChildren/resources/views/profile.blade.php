@extends('loyauts.app')
@section('title')
Мой профиль
@endsection
@section('content')

<section class="profile">
    <div class="container">
        <div class="profile_content">
            <div class="name_user">
                <div class="photo_and_role">
                    <?if(!empty(auth()->user()->avatar)){?>

                    <img src="<?=auth()->user()->avatar?>" alt="" class="user_img four">
                    <?}else{?>
                        <img src="/public/assets/images/user_img.png" alt="" class="user_img four">
                        <?}?>
                    <h5 class="h5"><?if(auth()->user()->role){echo 'Исполнитель';}else{echo 'Заказчик';}?></h5>
                    <a href="/logout"><h5 class="h5">Выйти</h5></a>
                </div>
                <p class="fio"><?=auth()->user()->surname?><br><?=auth()->user()->name?><br>{{auth()->user()->patronymic}}</p><br>
                
                
            </div>
                <div class="contacts">
                    <h5 class="h5">Контакты:</h5>
                    <h3 class="h3"><?=auth()->user()->email?></h3>
                    <h3 class="h3">Балланс <?if(empty(auth()->user()->money)){echo '0';}else{echo auth()->user()->money;}?> <?if(auth()->user()->role=='1'){?><span class="h5"> <a href="?add">Пополнить</a></span><?}?></h3>
                    <?if(isset($_GET['add'])){?>
                        <form action="/addBalance" method="POST" name="mon" >
                            @csrf
                            <label for="" class="form_e">
                            <input type="number" class="input edit_short_inp add_inp" placeholder="Руб" name="money">
                            <input type="submit" class="btn_one" value="ок" name="mon">
                            </label>
                            @error('money')
                            <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                            @enderror
                         
                        </form>
                    <?}?>
                    <a href="?page=edit_profile" class="btn_one profile_edit"><h6 class="h6">Редактировать профиль</h6></a>
                </div>            
        </div>
        <div class="reviews_user">
            <h3 class="h3">Отзывы</h3>
            <div class="user_review_list">
               
            </div>
        </div>
    </div>
</section>

@endsection