@extends('loyauts.app')
@section('title')
    Админ-панель
@endsection
@section('content')

<main>
    <section class="banner">
        <div class="container">
            <div class="banner_content">
                <form action="" class="banner_form">
                    
                    <select name=""  class="banner_inp_one" id="">
                        <option value disabled selected>Откуда</option>
                        <option>байконур</option>
                        <option>Starbase</option>
                        <option>Вэньчан</option>
                        <option>Канаверал</option>
                    </select>
                    <select name=""  class="banner_inp_one" id="">
                        <option value disabled selected>Куда</option>
                        <option>луна</option>
                        <option>Международная космическая станция (МКС)</option>
                        <option>Китайская модульная космическая станция (cms)</option>
                        <option>Космическая станция Axiom Space</option>
                    </select>
        
                    <input type="date" class="banner_inp_two" placeholder="период вылета">
                    <input type="text" class="banner_inp_three" placeholder="ночей">
                    <input type="text" class="banner_inp_three" placeholder="чел">
                    <button class="banner_btn">найти</button>
                </form>
            </div>
        </div>
    </section> 
    <div class="container">
        <section class="crums">
            <a href="" class="href_crum">главная</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Поиск тура</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Название отеля</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Выбор рейса</a>
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Выбор класса</a>
        </section>
        
    </div>
</main>
@endsection('content')