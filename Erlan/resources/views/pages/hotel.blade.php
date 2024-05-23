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
        </section>
        <section class="hotel_item">
            <div class="stars">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z" fill="white" />
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z" fill="white" />
                </svg>
            </div>
            <h2 class="name_hotel_item">
                кафка плаза
            </h2>
            <div class="main_info_about_hotel_item">
              
                <img src="{{asset('public/assets/img/hotel/KAFKA PLAZA.png')}}" class="big_img_hotel" alt="">
                <div class="right_block_info_hotel">
                    <div class="price_text">
                        <div class="price_p">
                            цена от:
                        </div>
                        <div class="price_cost">
                            <p class="cost">
                                00 000 000
                            </p>
                            <svg width="34" height="36" viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 22.35C24.2055 22.35 27.2817 21.2227 29.5516 19.2129C31.8218 17.2028 33.1 14.4736 33.1 11.625C33.1 8.77635 31.8218 6.04724 29.5516 4.03712C27.2817 2.02735 24.2055 0.9 21 0.9H9C8.5528 0.9 8.12182 1.05719 7.80234 1.34006C7.48246 1.62329 7.3 2.01022 7.3 2.41667V19.3167H2.6C2.1528 19.3167 1.72182 19.4739 1.40234 19.7567C1.08246 20.04 0.9 20.4269 0.9 20.8333C0.9 21.2398 1.08246 21.6267 1.40234 21.9099C1.72182 22.1928 2.1528 22.35 2.6 22.35H7.3V24.9833H2.6C2.1528 24.9833 1.72182 25.1405 1.40234 25.4234C1.08246 25.7066 0.9 26.0936 0.9 26.5C0.9 26.9064 1.08246 27.2934 1.40234 27.5766C1.72182 27.8595 2.1528 28.0167 2.6 28.0167H7.3V33.5833C7.3 33.9898 7.48246 34.3767 7.80234 34.6599C8.12182 34.9428 8.5528 35.1 9 35.1C9.4472 35.1 9.87818 34.9428 10.1977 34.6599C10.5175 34.3767 10.7 33.9898 10.7 33.5833V28.0167H20.2C20.6472 28.0167 21.0782 27.8595 21.3977 27.5766C21.7175 27.2934 21.9 26.9064 21.9 26.5C21.9 26.0936 21.7175 25.7066 21.3977 25.4234C21.0782 25.1405 20.6472 24.9833 20.2 24.9833H10.7V22.35H21ZM10.7 3.93333H21C23.311 3.93333 25.5254 4.74631 27.1562 6.19033C28.7867 7.634 29.7 9.58924 29.7 11.625C29.7 13.6608 28.7867 15.616 27.1562 17.0597C25.5254 18.5037 23.311 19.3167 21 19.3167H10.7V3.93333Z" fill="white" stroke="white" stroke-width="0.2" />
                            </svg>
                        </div>
                        
                    </div>
                    <div class="icons_comfort">
                        <img src="../assets/img/icons/ic_baseline-wifi.svg" alt="">
                        <img src="../assets/img/icons/maki_nightclub.svg" alt="">
                        <img src="../assets/img/icons/mdi_swim.svg" alt="">
                        <img src="../assets/img/icons/ph_disco-ball.svg" alt="">
                        <img src="../assets/img/icons/solar_volleyball-bold.svg" alt="">
                    </div>
                    <a href="./catalog_flight.html" class="white_btn">выбрать</a>
                </div>
            </div>
            <h2 class="name_section">
                Удобства отеля
            </h2>
            <div class="vkladki_more_info_hotel">

            </div>
        </section>
    </div>
</main>

@endsection('content')