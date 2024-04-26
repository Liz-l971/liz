

@extends('loyauts.app')
@section('content')
    <main>
        <div class="container mt-20">
            <h1 class="text-5xl mb-10">Log In</h1>
            <form action="{{route('auth.loginSession')}}" method="POST">
                @csrf
                <h4 class="text-2xl mb-5">email</h4>
                <input type="text" name="email" value="{{ old('email') }}" class="border-b border-black" style="width: 400px"><br><br>
                @error('email') <p class="text-red-500">{{ $message }}</p> @enderror
                <h4 class="text-2xl mb-5">password</h4>
                <input type="password" name="password" value="{{ old('password') }}"  class="border-b border-black" style="width: 400px"><br><br>
                @error('password') <p class="text-red-500">{{ $message }}</p> @enderror
                <button type="submit" class="bannerBtn border border-black text-2xl" style="width: 400px">Log in</button>
            </form>
            <a href="{{route('auth.signUp')}}">Sign UP</a>
        </div>
    </main>
@endsection


    
