@extends('loyauts.app')
@section('title')
FreeWork - Регистрация
@endsection
@section('content')
<section class="sign_in">
    <div class="container">
        <div class="signin_content sign_two">
            <h3 class="h3">Регистрация</h3>
            <h6 class="h6med"><span class="grey">Пожалуйста, зарегестрируйтесь</span></h6>
            <form action="/signUpUser" class="edit_profile" method="POST" name="sign_up">
                @csrf
                <label for="" class="inputs_edit_profile">
                    <label for="" class="checkbox">
                        <label for="" class="check_input">
                        <input type="radio" name="role" id="mc1" value="2">
                        <label for="mc1"><h6 class="h6med"> Я исполнитель</h6></label>
                        </label>
                        <input type="radio" name="role" id="mc2" value="1">
                        <label for="mc2"><h6 class="h6med"> Я заказчик</h6></label>
                    </label>
                    @error('role')
                    <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                    @enderror
                    <label class="inputs_edit_profiles_txt">
                        <input type="text" class="input edit_short_inp" placeholder="Имя" name="name" value="{{old('name')}}">
                        @error('name')
                        <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                        @enderror
                        <input type="text" class="input edit_short_inp" placeholder="Фамилия" name="surname" value="{{old('surname')}}">
                        @error('surname')
                        <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                        @enderror
                        <input type="text" class="input edit_short_inp" placeholder="Отчество" name="patronymic" value="{{old('patronymic')}}">
                        @error('patronymic')
                        <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                        @enderror
                        <input type="text" class="input edit_long_inp" placeholder="Email" name="email" value="{{old('email')}}">
                        @error('email')
                        <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                        @enderror
                        <input type="password" class="input edit_long_inp" placeholder="Введите пароль" name="password" value="{{old('password')}}">
                        <input type="password" class="input edit_long_inp" placeholder="Повторите пароль" name="re_password" value="">
                        @error('password')
                        <h6 class="h6"><span class ="red">{{$message}}</span></h6>
                        @enderror
                    </label>
                    <?php 
                    // echo ''.$error.'</span><h6>'
                        ?>
                    <input type="submit" class="btn_one sign_btn" value="Зарегестрироваться" name="sign_up">
                </label>
           
            </form>
          
        </div>
    </div>
</section>
@endsection