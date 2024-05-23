@extends('loyauts.app')
@section('title')
Регистрация
@endsection
@section('content')


<main>
    <div class="container">
        <section class="form_sign">
            <div class="qwe">
                <h2 class="name_form">Регистрация</h2>
                <form action="/signUpUser" class="form_col" method="POST">
                    @csrf
                    <input type="text" class="inp" placeholder="Имя" name="name" value="{{old('name')}}">
                    @error('name')
                    <h6 class="h6"><span class ="red" style="color: red">{{$message}}</span></h6>
                    @enderror
                    <input type="text" class="inp" placeholder="Электронная почта" name="email" value="{{old('email')}}">
                    @error('email')
                    <h6 class="h6"><span class ="red" style="color: red">{{$message}}</span></h6>
                    @enderror
                    <input type="password" class="inp" placeholder="Пароль" name="password" value="{{old('password')}}">
                    <input type="password" class="inp" placeholder="Подтвердите пароль"name="re_password" value="">
                    @error('password')
                    <h6 class="h6"><span class ="red" style="color: red">{{$message}}</span></h6>
                    @enderror
               
                   
                    
                   
                   
                    <button type="submit" class="form_btn">СОЗДАТЬ АККАУНТ</button>
                    <a href="/sign-in" class="link">ЕСТЬ аккаунт</a>

                </form>
            </div>
            
            <img src="{{asset('public/assets/img/background/sign.png')}}" alt="moon">
        </section>
    </div>
</main>

@endsection