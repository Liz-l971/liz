<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='{{mix('css/app.css')}}' rel="stylesheet" type="text/css">
    </head>
    <body>
       <style>
        @font-face {
    font-family: 'Tactic_Sans_h1';
    src: url('/public/assets/fonts/TacticSans-Blk.ttf');
}
@font-face {
    font-family: 'Tactic_Sans_h6';
    src: url('/public/assets/fonts/TacticSans-Reg.ttf');
}
@font-face {
    font-family: 'Tactic_Sans_bld';
    src: url('/public/assets/fonts/TacticSans-Bld.ttf');
}
@font-face {
    font-family: 'Tactic_Sans_med';
    src: url('/public/assets/fonts/TacticSans-Med.ttf');
}
       </style>
            @if (!auth()->user())
            @include('components.header');
            @endif
            @if (auth()->user())
            @include('components.headerAuth');
            @endif
            @yield('content');
   

    </body>
</html>
