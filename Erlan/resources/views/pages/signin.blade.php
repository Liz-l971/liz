  
    @extends('loyauts.app')
    @section('title')
    Авторизация
    @endsection
    @section('content')

<main>
    <div class="container">
        <section class="form_sign">
            <div class="qwe">
                <h2 class="name_form">аВТОРИЗАЦИЯ</h2>
                <form action="/signInUser" class="form_col" method="POST">
                    @csrf
                    <input type="text" class="inp" placeholder="Электронная почта" name="email" value="{{old('email')}}">
                    @error('email')
                    <h6 class="h6"><span class ="red" style="color: red">{{$message}}</span></h6>
                    @enderror
                    <input type="password" class="inp" placeholder="Пароль" name="password" value="{{old('password')}}">
                    @error('password')
                    <h6 class="h6"><span class ="red"  style="color: red">{{$message}}</span></h6>
                    @enderror
                    @error('invalid_credentials')<span class ="red" style="color: red">{{$message}}</span> @enderror
                    
                    <button type="submit" class="form_btn">Войти</button>
                    <a href="/sign-up" class="link">Нет аккаунта</a>
                </form>
            </div>
       
            <img src="{{asset('public/assets/img/background/sign.png')}}" alt="moon">
        </section>
    </div>
</main>

@endsection('content')