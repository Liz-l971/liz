@extends('loyauts.app')
@section('title')
    Админ-панель
@endsection
@section('content')
    <?php
    function formatDate($date, $format = 'd.m.y')
    {
        return date($format, strtotime($date));
    } ?>
    <main>
        <div class="admin_color">
            <div class="container">
                <section class="crums">
                    <a href="/index.html" class="href_crum">главная</a>
                    <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1.5L7 7.5L1 13.5" stroke="black" stroke-width="1.1" stroke-linecap="square"
                            stroke-linejoin="round" />
                    </svg>
                    <a href="" class="href_crum">Профиль</a>


                </section>
                <section class="profile_block">
                    <div class="block_all_info_about_broni">
                        <div class="bottom_block_border position">
                            <div class="bottom_block_border_content position">
                                <h4 class="main_name_bl">
                                    Мой профиль
                                </h4>
                                <div class="tab">
                                    <button class="tablinks active"
                                        onclick="openCity(event, 'Washington')">пользователи</button>
                                    <button class="tablinks" onclick="openCity(event, 'Pekin')">Брони</button>
                                    <button class="tablinks" onclick="openCity(event, 'Paris')">Добавить рейс</button>
                                    <button class="tablinks" onclick="openCity(event, 'Tokyo')">Добавить отель</button>
                                    <button class="tablinks" onclick="openCity(event, 'Berlin')">добавить корабль</button>
                                    <button class="tablinks" onclick="openCity(event, 'NewYork')">добавить услугу</button>
                                    <button class="tablinks" onclick="openCity(event, 'Moskow')">выйти из профиля</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="Washington" class="tabcontent block">
                        <div class="block_add_turist">
                            <div class="block_content_add_turist">
                                <div class="qweweweq">
                                    <h4 class="name_block">
                                        Пользователи
                                    </h4>
                                    <div class="vklad_sort">
                                        <button class="link act" onclick="openity(event, 'rew')">активные</button>
                                        <button class="link" onclick="openity(event, 'pov')">забаненные</button>

                                    </div>

                                    <div class="content_bron tabcontentqwe block" id="rew">
                                        <div class="text_column">
                                            <p class="grey_text id">
                                                id
                                            </p>
                                            <p class="grey_text fio">
                                                фио
                                            </p>
                                            <p class="grey_text zaregan">
                                                зареган
                                            </p>

                                        </div>
                                            <div class="column_flex">
                                                @foreach ($users as $user)
                                                <div class="flrx">
                                                    <div class="layot">
                                                        <p class="id">
                                                            {{$user->id}}
                                                        </p>
                                                        <p class="fio">
                                                            {{$user->surname}} {{$user->name}} {{$user->patronymic}}
                                                        </p>
                                                        <p class="data_zareg">
                                                            {{formatDate($user->created_at)}}
                                                        </p>
                                                        <p class="data_zaban">
                                                         
                                                        </p>
                                                    </div>
                                                    
                                                    <form action="/ban/{{$user->id}}" method="POST">
                                                     @csrf
                                                        <button>
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M2.22273 0.807542C1.83221 0.417017 1.19904 0.417017 0.808518 0.807542C0.417994 1.19807 0.417994 1.83123 0.808518 2.22176L8.58669 9.99993L0.808519 17.7781C0.417995 18.1686 0.417995 18.8018 0.808519 19.1923C1.19904 19.5828 1.83221 19.5828 2.22273 19.1923L10.0009 11.4141L17.779 19.1922C18.1695 19.5827 18.8027 19.5827 19.1932 19.1922C19.5837 18.8017 19.5837 18.1685 19.1932 17.778L11.4151 9.99993L19.1933 2.22176C19.5838 1.83123 19.5838 1.19807 19.1933 0.807542C18.8028 0.417017 18.1696 0.417017 17.7791 0.807542L10.0009 8.58572L2.22273 0.807542Z" fill="#5F5F5F" />
                                                            </svg>
                                                        </button>
                                                    </form>
                                                    
                                                </div>
                                                @endforeach
                                           
                                            
                                        </div>
                                    </div>
                                    <div class="content_bron tabcontentqwe" id="pov">
                                        <div class="text_column">
                                            <p class="grey_text id">
                                                id
                                            </p>
                                            <p class="grey_text fio">
                                                фио
                                            </p>
                                            <p class="grey_text zaregan">
                                                зареган
                                            </p>
                                            <p class="grey_text zaregan">
                                                забанен
                                            </p>
                                        </div>
                                        <div class="column_flex">
                                            @foreach ($usersB as $user)
                                            <div class="flrx">
                                                <div class="layot">
                                                    <p class="id">
                                                        {{$user->id}}
                                                    </p>
                                                    <p class="fio">
                                                        {{$user->surname}} {{$user->name}} {{$user->patronymic}}
                                                    </p>
                                                    <p class="data_zareg">
                                                        {{formatDate($user->created_at)}}
                                                    </p>
                                                    <p class="data_zaban">
                                                        {{$user->data_ban}}
                                                    </p>
                                                </div>
                                                <form action="/unban/{{$user->id}}" method="POST">
                                                    @csrf
                                                       <button>
                                                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M2.22273 0.807542C1.83221 0.417017 1.19904 0.417017 0.808518 0.807542C0.417994 1.19807 0.417994 1.83123 0.808518 2.22176L8.58669 9.99993L0.808519 17.7781C0.417995 18.1686 0.417995 18.8018 0.808519 19.1923C1.19904 19.5828 1.83221 19.5828 2.22273 19.1923L10.0009 11.4141L17.779 19.1922C18.1695 19.5827 18.8027 19.5827 19.1932 19.1922C19.5837 18.8017 19.5837 18.1685 19.1932 17.778L11.4151 9.99993L19.1933 2.22176C19.5838 1.83123 19.5838 1.19807 19.1933 0.807542C18.8028 0.417017 18.1696 0.417017 17.7791 0.807542L10.0009 8.58572L2.22273 0.807542Z" fill="#5F5F5F" />
                                                           </svg>
                                                       </button>
                                                   </form>
                                            </div>
                                        @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="Paris" class="tabcontent">
                        <div class="block_add_turist">
                            <div class="block_content_add_turist">
                                <div class="qweweweq">
                                    <h4 class="name_block">
                                        Смена пароля
                                    </h4>
                                    <form action="" class="add_turist_form">
                                        <div class="display_flex_pass">
                                            <div class="pg">
                                                <input type="password" name="password" placeholder="старый пароль"
                                                    class="top_inputs">
                                                <input type="password" name="password" placeholder="Новый пароль"
                                                    class="top_inputs">
                                                <input type="password" name="password" placeholder="Повторите пароль"
                                                    class="top_inputs">
                                                <button class="btn_add_turist">СОхранить</button>
                                            </div>
                                            <div class="checkbox-wrapper-21">
                                                <label class="control control--checkbox">
                                                    показать пароль
                                                    <input type="checkbox" class="password-checkbox">
                                                    <div class="control__indicator"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="Pekin" class="tabcontent">
                        <div class="block_add_turist">
                            <div class="block_content_add_turist">
                                <div class="qweweweq">
                                    <h4 class="name_block">
                                        Мои заказы
                                    </h4>
                                    <div class="vklad_sort">
                                        <p class="link act">все</p>
                                        <p class="link">Забронированные</p>
                                        <p class="link">архивные</p>
                                    </div>
                                    <div class="content_bron">
                                        <div class="hrum_hrum">
                                            <p class="data_bron">
                                                Дата брони: 25.12.2204 12:34
                                            </p>
                                            <div class="panel_my_bron">
                                                <div class="bottom_block_border_content qwe">
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
                                                        <svg width="40" height="7" viewBox="0 0 39 7"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                fill="#9A9A9A" />
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
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            доп.услуги
                                                        </p>
                                                        <p class="class_and_eat">
                                                            вино(на заказ), пиво
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="bottom_block_border_content rew">
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
                                                        <svg width="40" height="7" viewBox="0 0 39 7"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                fill="#9A9A9A" />
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
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            доп.услуги
                                                        </p>
                                                        <p class="class_and_eat">
                                                            вино(на заказ), пиво
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="line_qw">
                                                <div class="riobn">
                                                    <div class="hz_kak_nazvat_block">
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
                                                            <svg width="39" height="7" viewBox="0 0 39 7"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                    fill="#9A9A9A" />
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
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                                                                        fill="white" />
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
                                                    <div class="white_block">
                                                        <p class="cost">
                                                            00 000 000
                                                        </p>
                                                        <svg width="21" height="23" viewBox="0 0 21 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                                fill="black" stroke="black" stroke-width="0.2" />
                                                        </svg>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="hrum_hrum">
                                            <p class="data_bron">
                                                Дата брони: 25.12.2204 12:34
                                            </p>
                                            <div class="panel_my_bron">
                                                <div class="bottom_block_border_content qwe">
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
                                                        <svg width="40" height="7" viewBox="0 0 39 7"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                fill="#9A9A9A" />
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
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            доп.услуги
                                                        </p>
                                                        <p class="class_and_eat">
                                                            вино(на заказ), пиво
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="bottom_block_border_content rew">
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
                                                        <svg width="40" height="7" viewBox="0 0 39 7"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                fill="#9A9A9A" />
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
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            доп.услуги
                                                        </p>
                                                        <p class="class_and_eat">
                                                            вино(на заказ), пиво
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="line_qw">
                                                <div class="riobn">
                                                    <div class="hz_kak_nazvat_block">
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
                                                            <svg width="39" height="7" viewBox="0 0 39 7"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                    fill="#9A9A9A" />
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
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                                                                        fill="white" />
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
                                                    <div class="white_block">
                                                        <p class="cost">
                                                            00 000 000
                                                        </p>
                                                        <svg width="21" height="23" viewBox="0 0 21 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                                fill="black" stroke="black" stroke-width="0.2" />
                                                        </svg>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="hrum_hrum">
                                            <p class="data_bron">
                                                Дата брони: 25.12.2204 12:34
                                            </p>
                                            <div class="panel_my_bron">
                                                <div class="bottom_block_border_content qwe">
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
                                                        <svg width="40" height="7" viewBox="0 0 39 7"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                fill="#9A9A9A" />
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
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            доп.услуги
                                                        </p>
                                                        <p class="class_and_eat">
                                                            вино(на заказ), пиво
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="bottom_block_border_content rew">
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
                                                        <svg width="40" height="7" viewBox="0 0 39 7"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                fill="#9A9A9A" />
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
                                                    <div class="time_info">
                                                        <p class="name_hotel">
                                                            доп.услуги
                                                        </p>
                                                        <p class="class_and_eat">
                                                            вино(на заказ), пиво
                                                        </p>
                                                    </div>
                                                </div>
                                                <hr class="line_qw">
                                                <div class="riobn">
                                                    <div class="hz_kak_nazvat_block">
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
                                                            <svg width="39" height="7" viewBox="0 0 39 7"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M39 3.5L34 0.613249V6.38675L39 3.5ZM0 4H34.5V3H0V4Z"
                                                                    fill="#9A9A9A" />
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
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 17.27L18.18 21L16.54 13.97L22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.46 13.97L5.82 21L12 17.27Z"
                                                                        fill="white" />
                                                                </svg>
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M12 15.39L8.24 17.66L9.23 13.38L5.91 10.5L10.29 10.13L12 6.09L13.71 10.13L18.09 10.5L14.77 13.38L15.76 17.66M22 9.24L14.81 8.63L12 2L9.19 8.63L2 9.24L7.45 13.97L5.82 21L12 17.27L18.18 21L16.54 13.97L22 9.24Z"
                                                                        fill="white" />
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
                                                    <div class="white_block">
                                                        <p class="cost">
                                                            00 000 000
                                                        </p>
                                                        <svg width="21" height="23" viewBox="0 0 21 23"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M12.7129 14.35C14.7259 14.35 16.658 13.6171 18.0838 12.3101C19.5099 11.0028 20.3129 9.22783 20.3129 7.375C20.3129 5.52217 19.5099 3.74719 18.0838 2.43993C16.658 1.13293 14.7259 0.4 12.7129 0.4H5.21289C4.92382 0.4 4.64504 0.505182 4.43821 0.69477C4.2311 0.884626 4.11289 1.14408 4.11289 1.41667V12.3167H1.21289C0.923825 12.3167 0.645036 12.4218 0.438212 12.6114C0.231096 12.8013 0.112891 13.0608 0.112891 13.3333C0.112891 13.6059 0.231096 13.8654 0.438212 14.0552C0.645036 14.2448 0.923825 14.35 1.21289 14.35H4.11289V15.9833H1.21289C0.923825 15.9833 0.645036 16.0885 0.438212 16.2781C0.231096 16.468 0.112891 16.7274 0.112891 17C0.112891 17.2726 0.231096 17.532 0.438212 17.7219C0.645035 17.9115 0.923825 18.0167 1.21289 18.0167H4.11289V21.5833C4.11289 21.8559 4.2311 22.1154 4.43821 22.3052C4.64504 22.4948 4.92383 22.6 5.21289 22.6C5.50196 22.6 5.78075 22.4948 5.98757 22.3052C6.19468 22.1154 6.31289 21.8559 6.31289 21.5833V18.0167H12.2129C12.502 18.0167 12.7807 17.9115 12.9876 17.7219C13.1947 17.532 13.3129 17.2726 13.3129 17C13.3129 16.7274 13.1947 16.468 12.9876 16.2781C12.7807 16.0885 12.502 15.9833 12.2129 15.9833H6.31289V14.35H12.7129ZM6.31289 2.43333H12.7129C14.1477 2.43333 15.5222 2.9559 16.5344 3.88372C17.5463 4.81127 18.1129 6.06734 18.1129 7.375C18.1129 8.68266 17.5463 9.93873 16.5344 10.8663C15.5222 11.7941 14.1477 12.3167 12.7129 12.3167H6.31289V2.43333Z"
                                                                fill="black" stroke="black" stroke-width="0.2" />
                                                        </svg>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>

    </main>
@endsection('content')
