<!DOCTYPE html>

<html class="h-full" lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <script src="{{ asset('public/assets/js/fogmSignUp.js') }}" defer></script>
    {{-- <script src="{{ asset('public/assets/js/slider.js') }}" defer></script> --}}

</head>

<body>
    <header>
        <div class="container">

            {{-- HEADER CONTENT --}}
            <div class="header__content">

                {{-- LOGOTYPE --}}
                <a href="/">
                    <div class="logo">
                        <h2 class="logo__txt">ForChildren</h2>
                        <img src="public/assets/img/mainImg/logo.png" alt="" class="logo__img">
                    </div>
                </a>
                {{-- LOGOTYPE --}}

                {{-- HEADER MENU --}}
                <ul class="header__menu">
                    <li>
                        <a href="/about"
                        class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">About us</a>
                    </li>
                    <li>
                        <a href="/journal"
                        class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">Journal</a>
                    </li>
                    <li>
                        <a href="/"
                        class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">Где нас найти?</a>
                    </li>
                    @auth
                        @if (auth()->user()->status === 2)
                            <a href="/admin"
                                class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">Admin
                                panel</a>
                        @endif
                    @endauth

                </ul>
                {{-- HEADER MENU --}}

                {{-- SIGN IN BUTTON --}}
                <div class="sign__in__btns">
                    @if (!auth()->user())
                        <a href="{{ route('auth.login') }}" class="button__main button__light">
                            Вход
                        </a>
                        <a href="{{route('auth.signUp')}}" class="button__main button__dark">
                            Регистрация
                        </a>
                    @endif
                    @auth
                    <a href="/basket/">
                        <svg width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-basket"
                            fill="#716cc7" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                        </svg>
                    </a>
                    <div class="profile__btns">
                        <a href="/profile">{{ auth()->user()->name }}</a>
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="button__main button__dark">Exit</button>
                        </form>
                    </div>
                    @endauth
                </div>

                {{-- SIGN IN BUTTON --}}

            </div>
            {{-- HEADER CONTENT --}}
        </div>
    </header>
    @yield('content')
    <footer>
        <div class="container">

            {{-- HEADER CONTENT --}}
            <div class="header__content">

                {{-- LOGOTYPE --}}
                <a href="#">
                    <div class="logo">
                        <h2 class="logo__txt">ForChildren</h2>
                        <img src="public/assets/img/mainImg/logo.png" alt="" class="logo__img">
                    </div>
                </a>
                {{-- LOGOTYPE --}}

                {{-- HEADER MENU --}}
                <ul class="header__menu">
                    <li>
                        <a href="/about"
                        class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">About us</a>
                    </li>
                    <li>
                        <a href="/journal"
                        class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">Journal</a>
                    </li>
                    <li>
                        <a href="/"
                        class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">Где нас найти?</a>
                    </li>
                    @auth
                        @if (auth()->user()->status === 2)
                            <a href="/admin"
                                class="transition-all px-2 py-1 text-lg border-b border-transparent hover:border-black">Admin
                                panel</a>
                        @endif
                    @endauth

                </ul>
                {{-- HEADER MENU --}}

                {{-- SIGN IN BUTTON --}}
              

                {{-- SIGN IN BUTTON --}}

            </div>
            {{-- HEADER CONTENT --}}
        </div>
    </footer>



</body>

</html>