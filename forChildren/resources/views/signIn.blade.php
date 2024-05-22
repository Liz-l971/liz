@extends('loyauts.app')
@section('title')
FreeWork - Авторизация
@endsection
@section('content')

<section class="sign_up">
    <div class="container">
        <div class="sign_up_content">
            <h3 class="h3">Авторизация</h3>
            <h6 class="h6med"><span class="grey">Пожалуйста, авторизируйтесь</span></h6>
            <form action="/signInUser" class="sign_up_form" method="POST" name="sign_in">
                @csrf
                <input type="text" class="input sign_up_inp" placeholder="Email" name="email" value="{{old('email')}}">
                @error('email')
                <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                @enderror
                <input type="password" class="input sign_up_inp" placeholder="Пароль" name="password">
                @error('password')
                <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                @enderror
                @error('invalid_credentials')<span class ="red">{{$message}}</span> @enderror
                <input type="submit" class="btn_one sign_btn" value="Войти в систему" name="sign_in">
            </form>
            <a href="/sign-up" class="btn_two"><h6 class="h6med">Зарегестрироваться</h6></a>
            <?php 
            // echo '<h6 class="h6"><span class ="red">'.$error.'</span><h6>'
                ?>
        </div>
    </div>
</section>

@endsection