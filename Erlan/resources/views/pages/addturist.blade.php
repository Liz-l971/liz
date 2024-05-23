@extends('loyauts.app')
@section('title')
   Добавить туриста
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
            <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1.5L7 7.5L1 13.5" stroke="white" stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
            </svg>
            <a href="" class="href_crum">Добавление туристов</a>
        </section>
        <section class="add_pass">
            <div class="block_add_turist">
                <h2 class="name_page">
                    Добавление туристов
                </h2>
                <div class="block_content_add_turist">
                    <div class="qweweweq">
                        <h4 class="name_block">
                            турист 1
                        </h4>
                        <form action="" class="add_turist_form">
                            <div class="display_flex">
                                <input type="text" placeholder="псевдоним(мама, муж)" class="top_inputs">
                                <input type="text" placeholder="фамилия" class="top_inputs">
                                <input type="text" placeholder="Имя" class="top_inputs">
                                <input type="text" placeholder="отчество"class="top_inputs">
                            </div>
                            <div class="display_flex">
                                <input type="date" placeholder="дата рождения" class="data_inputs">
                                <select name=""  class="pol_inputs" id="">
                                    <option value disabled selected>пол</option>
                                    <option>м</option>
                                    <option>ж</option>
                                </select>
                                <select name=""  class="top_inputs" id="">
                                    <option value disabled selected>гражданство</option>
                                    <option>россия</option>
                                    <option>Китай</option>
                                    <option>Сша</option>
                                   
                                </select>
                                <input type="text" placeholder="телефон" class="top_inputs">
                                <input type="text" placeholder="электронная почта"class="top_inputs">
                            </div>
                            <button class="btn_add_turist">добавить туриста</button>
                        </form>
                    </div>
                    <div class="qweweweq">
                        <h4 class="name_block">
                            турист 2
                        </h4>
                        <form action="" class="add_turist_form">
                            <div class="display_flex">
                                <input type="text" placeholder="псевдоним(мама, муж)" class="top_inputs">
                                <input type="text" placeholder="фамилия" class="top_inputs">
                                <input type="text" placeholder="Имя" class="top_inputs">
                                <input type="text" placeholder="отчество"class="top_inputs">
                            </div>
                            <div class="display_flex">
                                <input type="date" placeholder="дата рождения" class="data_inputs">
                                <select name=""  class="pol_inputs" id="">
                                    <option value disabled selected>пол</option>
                                    <option>м</option>
                                    <option>ж</option>
                                </select>
                                <select name=""  class="top_inputs" id="">
                                    <option value disabled selected>гражданство</option>
                                    <option>россия</option>
                                    <option>Китай</option>
                                    <option>Сша</option>
                                   
                                </select>
                                <input type="text" placeholder="телефон" class="top_inputs">
                                <input type="text" placeholder="электронная почта"class="top_inputs">
                            </div>
                            <button class="btn_add_turist">добавить туриста</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="block_all_info_about_broni">
                <div class="top_white_block">
                    <div class="top_white_block_content">
                        <p class="little_text">
                            Итоговая стоимость:
                        </p>
                        <div class="cost">
                            <p class="cost_p">
                                00 000 000
                            </p>
                            <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.5 14.85C15.513 14.85 17.4451 14.1171 18.8709 12.8101C20.297 11.5028 21.1 9.72783 21.1 7.875C21.1 6.02217 20.297 4.24719 18.8709 2.93993C17.4451 1.63293 15.513 0.9 13.5 0.9H6C5.71093 0.9 5.43214 1.00518 5.22532 1.19477C5.01821 1.38463 4.9 1.64408 4.9 1.91667V12.8167H2C1.71093 12.8167 1.43214 12.9218 1.22532 13.1114C1.01821 13.3013 0.9 13.5608 0.9 13.8333C0.9 14.1059 1.01821 14.3654 1.22532 14.5552C1.43215 14.7448 1.71093 14.85 2 14.85H4.9V16.4833H2C1.71093 16.4833 1.43215 16.5885 1.22532 16.7781C1.01821 16.968 0.9 17.2274 0.9 17.5C0.9 17.7726 1.01821 18.032 1.22532 18.2219C1.43214 18.4115 1.71093 18.5167 2 18.5167H4.9V22.0833C4.9 22.3559 5.01821 22.6154 5.22532 22.8052C5.43215 22.9948 5.71093 23.1 6 23.1C6.28907 23.1 6.56785 22.9948 6.77468 22.8052C6.98179 22.6154 7.1 22.3559 7.1 22.0833V18.5167H13C13.2891 18.5167 13.5679 18.4115 13.7747 18.2219C13.9818 18.032 14.1 17.7726 14.1 17.5C14.1 17.2274 13.9818 16.968 13.7747 16.7781C13.5679 16.5885 13.2891 16.4833 13 16.4833H7.1V14.85H13.5ZM7.1 2.93333H13.5C14.9348 2.93333 16.3094 3.4559 17.3215 4.38372C18.3334 5.31127 18.9 6.56734 18.9 7.875C18.9 9.18266 18.3334 10.4387 17.3215 11.3663C16.3094 12.2941 14.9348 12.8167 13.5 12.8167H7.1V2.93333Z" fill="black" stroke="black" stroke-width="0.2" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="bottom_block_border">
                    <div class="bottom_block_border_content">
                        <h4 class="main_name_bl">
                            Детали тура
                        </h4> 
                        <h5 class="name_blovk">
                            Отель
                        </h5>
                        <div class="tet_a_tet">
                            <div class="column_time">
                                <p class="time">
                                    00.00.0000
                                </p>
                                <p class="lit">
                                    Дата заезда
                                </p>
                            </div>
                            <svg width="39" height="7" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                            </svg>
                            <div class="column_time">
                                <p class="time">
                                    00.00.0000
                                </p>
                                <p class="lit">
                                    Дата выезда
                                </p>
                            </div>
                            

                        </div>
                        <div class="hotel_info">
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
                            <p class="name_hotel">
                                Кафка плаза
                            </p>
                            <p class="class_and_eat">
                                SUITE + FAMILY + DELUXE — ультра все включено
                            </p>
                        </div>
                        <div class="time_info">
                            <p class="name_hotel">
                                доп.услуги
                            </p>
                            <p class="class_and_eat">
                                вино(на заказ), пиво
                            </p>
                        </div>                
                    </div>
                    <hr class="line_white">
                    <div class="bottom_block_border_content">
                        <h5 class="name_blovk">
                            космоперелёт
                        </h5>
                        <div class="tet_a_tet">
                            <div class="column_time">
                                <p class="time">
                                    00.00.0000 <br>
                                    12:00
                                </p>
                                <p class="lit">
                                    Космодром байконур (г.Байконур)
                                </p>
                            </div>
                            <svg width="40" height="7" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                            </svg>
                            <div class="column_time">
                                <p class="time">
                                    00.00.0000<br>
                                    12:00
                                </p>
                                <p class="lit">
                                    Космодром Звездные врата
                                </p>
                            </div>

                        </div>
                        <div class="hotel_info">
                            
                            <p class="name_hotel">
                                rosscosmos
                            </p>
                            <p class="class_and_eat">
                                эконом-класс
                            </p>
                        </div>
                        <div class="time_info">
                            <p class="name_hotel">
                                время полёта
                            </p>
                            <p class="class_and_eat">
                                35д. 12ч.
                            </p>
                        </div>
                    </div>
                    <hr class="line_grey">
                    <div class="bottom_block_border_content">
                        <h5 class="name_blovk">
                            космоперелёт
                        </h5>
                        <div class="tet_a_tet">
                            <div class="column_time">
                                <p class="time">
                                    00.00.0000 <br>
                                    12:00
                                </p>
                                <p class="lit">
                                    Космодром байконур (г.Байконур)
                                </p>
                            </div>
                            <svg width="40" height="7" viewBox="0 0 39 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z" fill="#9A9A9A" />
                            </svg>
                            <div class="column_time">
                                <p class="time">
                                    00.00.0000<br>
                                    12:00
                                </p>
                                <p class="lit">
                                    Космодром Звездные врата
                                </p>
                            </div>

                        </div>
                        <div class="hotel_info">
                            
                            <p class="name_hotel">
                                rosscosmos
                            </p>
                            <p class="class_and_eat">
                                эконом-класс
                            </p>
                        </div>
                        <div class="time_info">
                            <p class="name_hotel">
                                время полёта
                            </p>
                            <p class="class_and_eat">
                                35д. 12ч.
                            </p>
                        </div>
                        <a href="./profile.html" class="bron">Бронировать</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection('content')