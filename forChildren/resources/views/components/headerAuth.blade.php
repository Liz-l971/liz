<header class="header">
        <div class="container">
            <div class="header_content">
                <a href="" class="logo_link">
                    <img src="/img/logo.svg" alt="" class="logo">
                </a>
                <div class="men">
                <ul class="header_menu">
                    <li class="header_item">
                        <?if(auth()->user()->role=='1'){?>
                            <a href="/my-task" class="header_link">
                                <h6 class="h6">
                                    Мои задания

                                </h6>
                            </a>
                        <?}else if(auth()->user()->role=='2'){?>
                             <a href="/task-list" class="header_link">
                             <h6 class="h6">
                                 Задания
                             </h6>
                         </a>
                        <?}?>
                     
                    </li>
                    <li class="header_item">
                    <?if(auth()->user()->role=='2'){?>
                        <a href="/my-task" class="header_link">
                            <h6 class="h6">
                                Мои задания
                            </h6>
                        </a>
                    <?}elseif(auth()->user()->role=='1'){?>
                        <a href="?page=responces" class="header_link">
                            <h6 class="h6">
                                Отклики
                            </h6>
                        </a>
                    <?}?>
                    </li>
            
                    <?if(auth()->user()->level=='2'){?> 
                        <li class="header_item">
                            <a href="?page=users" class="header_link">
                                <h6 class="h6">
                                    Пользователи
                                </h6>
                            </a>
                        </li>
                    <?}?>
                </ul>
                <a href="/profile" class="profile_link two_prof">
                    <h6 class="h6">{{auth()->user()->name}}</h6>
                    <img src={{auth()->user()->avatar}} alt="" class="user_img two">
                </a>
                </div>
                <a href="/profile" class="profile_link one_prof">
                    <h6 class="h6">{{auth()->user()->name}}</h6>
                    <img src={{auth()->user()->avatar}} alt="" class="user_img two">
                </a>
                <button class="header__burger-btn" id="burger">
                <span></span><span></span><span></span>
            </button>
            </div>
        </div>
    </header>
