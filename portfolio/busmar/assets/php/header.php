<?php
$services = $conn->query("SELECT * FROM `services`")->fetchAll(2);
$category_news = $conn->query("SELECT * FROM `category_news`")->fetchAll(2);

?>
<div class="header_all">
            <div class="header_content">
                <div class="logo">
                    <img src="assets/img/banner/bus.svg" alt="логотип" class="logo_img">
                    <p class="logo_txt">
                        BUS.MAR
                    </p>
                </div>
                <div class="header_big_menu">
                    <ul class="header_menu">
                        <li class="header_item">
                            <div class="header_menu_title">
                                <a href="?" class="header_link">Главная</a>
                            </div>
                            <div class="header_menu_block">
                                <a href="?#about_us" class="header_more_link">О нас</a>
                                <a href="?#questions" class="header_more_link">Ответы на частые вопросы</a>
                                <a href="?#zayavka" class="header_more_link">Заявка на звонок</a>
                                <a href="#examples" class="header_more_link">Наши работы</a>
                            </div>
                        </li>
                        <li class="header_item">
                            <div class="header_menu_title">
                                <a href="?p=services" class="header_link">Услуги</a>
                            </div>
                            <div class="header_menu_block">
                                <?foreach($services as $item):?>
                                <a href="?p=service_page&id=<?=$item['id']?>" class="header_more_link"><?=$item['name']?></a>
                                <?endforeach;?>
                            </div>
                        </li>
                        <li class="header_item">
                            <div class="header_menu_title">
                                <a href="?p=news" class="header_link">Статьи</a>
                            </div>
                            <div class="header_menu_block">
                                <?foreach($category_news as $item):?>
                                    <a href="?p=news&category_id=<?=$item['id']?>" class="header_more_link"><?=$item['name']?></a>
                                <?endforeach;?>
                            </div>
                        </li>
                        <li class="header_item">
                            <div class="header_menu_title">
                                <?if(isset($_SESSION['uid'])){?>
                                <a href="?p=profile" class="header_link auth_link">Профиль</a>
                                <?}else{?>
                                <a href="?sign_in" class="header_link auth_link" onclick="open_modal(0)">Войти</a>
                                <?}?>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="burgermenu">
                    <img src="assets/img/header/Group 27.svg" alt="lineone" onclick="myFunction()" class="openmenu">
                  
                    <div id="burger" class="burger-menu-item">
                      <button class="close-menu"><img src="./assets/img/header/Group 28.svg" alt=""></button>
                      <a href="?p=profile" class="top_bbb otstio">Профиль</a>
                      <a href="?sign_in" class="top_bbb pocherk">Войти</a>
                      <div class="grey_burg">
                        <a href="?p=services" class="bottom_bbb">Услуги</a>
                        <a href="?p=news" class="bottom_bbb">Статьи</a>
                        <a href="?" class="bottom_bbb">Главная</a>
                      </div>
                    </div>
                  </div>
            </div>
        </div>