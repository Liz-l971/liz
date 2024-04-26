@extends('loyauts.app')
@section('content')
    <main>
        <section class="sign__up">
            <div class="container">
                <div class="container">
                    <p class="title">Log In</p>
                    <form action="{{ route('auth.loginSession') }}" method="POST">
                        @csrf
                        <h4 class="input__text">login</h4>
                        <input type="text" name="login" value="{{ old('logi') }}" class="input"
                            style="width: 400px"><br><br>
                        @error('login')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <h4 class="input__text">password</h4>
                        <input type="password" name="password" value="{{ old('password') }}" class="input"
                            style="width: 400px"><br><br>
                        @error('password')
                            <p class="error">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="button__main button__dark" style="width: 400px">Log
                            in</button>
                    </form>
                </div>
            </section>
        </main>


   

@endsection
