<header>
    <div class="container">
        <div class="header_content">
            <div class="logo">
                ERLAN
            </div>
            <nav>
                <div class="nav_item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 31C24.2843 31 31 24.2843 31 16C31 7.71573 24.2843 1 16 1C7.71573 1 1 7.71573 1 16C1 24.2843 7.71573 31 16 31Z" stroke="white" stroke-width="2" />
                        <path d="M11 19.2H16.1429M12.7143 16V9.92C12.7143 9.6224 12.7143 9.4736 12.7349 9.3504C12.7913 9.01629 12.9598 8.70747 13.216 8.46829C13.4723 8.22912 13.8032 8.0719 14.1611 8.0192C14.2914 8 14.4526 8 14.7714 8H18.7143C19.8509 8 20.941 8.42143 21.7447 9.17157C22.5485 9.92172 23 10.9391 23 12C23 13.0609 22.5485 14.0783 21.7447 14.8284C20.941 15.5786 19.8509 16 18.7143 16H12.7143ZM12.7143 16V24M12.7143 16H11" stroke="white" stroke-width="2" stroke-linecap="round" />
                    </svg>
                    <p class="name_valute">
                        РУБ.
                    </p>
                </div>
                <a href="./src/pages/catalog_hotel.html" class="time_item">
                    каталог
                </a>
                <button class="sidebar_toggler">
                    <div class="">
                        <svg width="78" height="15" viewBox="0 0 78 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 2H76" stroke="white" stroke-width="4" stroke-linecap="round" />
                            <path d="M2 13.5H76" stroke="white" stroke-width="4" stroke-linecap="round" />
                        </svg>
                    </div> <!-- Иконка бургера -->
                </button>
                <div class="sidebar" id="sidebar">
                    <span class="close_btn" id="close_btn">&times;</span><!-- Кнопка закрытия -->
                    <div class="menu_burder_contetn">
                        @auth
                        <a href="/profile" class="profile">
                            <h5 class="name_user">
                                {{auth()->user()->surname}} {{auth()->user()->name}}
                            </h5>
                            <div class="profile_link">
                                <p class="profile_p">
                                    профиль
                                </p>
                                <svg width="9" height="15" viewBox="0 0 9 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L8 7.5L1 14"  stroke-width="1.1" stroke-linecap="square" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </a>
                            
                        @endauth
                    
                        <div class="gap user">
                            <a href="" class="burger_item">забронировать</a>
                            <a href="" class="burger_item">мои брони</a>
                            <a href="" class="burger_item">мои пассажиры</a>
                        </div>
                        @if (!auth()->user())
                        <div class="gap nouser">
                            <a href="/sign-in" class="burger_item">войти в аккаунт</a>
                       
                        </div>
                        @endif
                      
                        <hr class="line_burger">
                        <div class="gap">
                            <a href="" class="little_text">о компании</a>
                            <a href="" class="little_text">новости</a>
                            <a href="" class="little_text">частые вопросы</a>
                        </div>
                        
                    </div>
                </div>
                <div class="content" id="content">
                 
                </div>
        
            </nav>
        </div>
    </div>
</header>