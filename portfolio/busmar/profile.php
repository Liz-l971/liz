    <?php
    $company = $conn ->query("SELECT * FROM `company` WHERE `id_user` = '{$usersee['id']}'")->fetchAll(2);
    $news = $conn ->query("SELECT * FROM `news` WHERE `id_author` = '{$usersee['id']}'")->fetchAll(2);
    ?>
    
    <header class="header scroll_header scroll_white_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="block">
        <div class="container">
            <div class="profile_content">
                <div class="profile_title">
                    <?if($usersee['status']==0){?>
                        <p class="title">Вы забокированны</p>
                    <?}else{?>
                        <p class="title">Ваш профиль</p>
                    <?}?>
                    
                    <?if($usersee['status']==2):?>
                    <a href="?p=admin_panel" class="step_profile_link"><b>Админ-панель</b></a>
                    <?endif;?>
                </div>
                <div class="profile_info">
                    <div class="info_top">
                        <img src="<?=$usersee['img']?>" alt="аватар" class="avatar_img" width="224px" height="234px">
                        
                        <!-- <img src="assets/img/profile/avatar.svg" alt="аватар" > -->
                        <div class="profile_txt_grid">
                            <div class="profile_info_block">
                                <h5><b><?=$usersee['name']?></b></h5>
                                <h5><b><?=$usersee['surname']?></b></h5>
                                <h5><b><?=$usersee['patronymic']?></b></h5>                            
                            </div>
                            <div class="profile_info_block rignidoin">
                                <h5><b><span class="underline">Контакты</span></b></h5>
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/phone.svg" alt="телефон">
                                    <h4><b>+<?=$usersee['number']?></b></h4>
                                </div>
        
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/mail.svg" alt="почта">
                                    <h4><b><?=$usersee['email']?></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h4>
                    <br>
                    <a href="?p=exit" class="step_profile_link"><b>Выход</b></a>
                    </h4>
                <a href="?p=edit_profile" class="btn_one profile_btn">Редакировать</a>
                </div>
                <div class="profile_info_mobile">
                    <div class="info_top">
                    
                        <div class="profile_info_block">
                            <img src="<?=$usersee['img']?>" alt="аватар" class="avatar_img">
                            <div class="dfbppsd">
                                <h5><b><?=$usersee['name']?></b></h5>
                                <h5><b><?=$usersee['name']?></b></h5>
                                <h5><b><?=$usersee['patronymic']?></b></h5>
                            </div>
                        </div>
                        <div class="profile_txt_grid">
                            <div class="profile_info_block rignidoin">
                                <h5><b><span class="underline">Контакты</span></b></h5>
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/phone.svg" alt="телефон">
                                    <h4><b>+<?=$usersee['number']?></b></h4>
                                </div>
        
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/mail.svg" alt="почта">
                                    <h4><b><?=$usersee['email']?></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sddvih">
                        <a href="?p=edit_profile" class="btn_one profile_btn">Редакировать</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <?if($usersee['status']==1){?>
    <section class="block profile_table">
        <div class="container">
            <div class="nav_table">
                <a class="nav_table_link nav_table_link-1 active_nav_profile_link" data-tab="1">Мои компании</a>
                <a class="nav_table_link nav_table_link-2" data-tab="2">Мои статьи</a>

            </div>
            <div class="profile_table_table profile_table-1 active_profile">
            <table>
                <?if(!empty($company)){?>
                    <tr>
                        <th>Название компании</th>
                        <th>Сайт</th>
                        <th>Комментарий</th>
                    </tr>
                <?}else{?>
                    <p class="empty_txt">У вас не добавленно ни одной компании чтобы подключиться к услугам</p>
                <?}?>
                <?foreach($company as $item):?>
                <tr onclick="company(<?=$item['id']?>)">
                    <th><?=$item['name'];?></th>
                    <th><?=$item['adress'];?></th>  
                    <th><?=$item['comment'];?>
                    </th>
                  
                </tr>
                <?endforeach;?>
            </table>
            <br>
            <br>
            <a href="?p=add_company" class="btn_three add_table">Добавить компанию</a>
            </div>
           
            <div class="profile_table_table profile_table-2">
            
            <table>
                <tr>
                    <th>Название статьи</th>
                    <th>Дата</th>
                    <th>Статус</th>
                </tr>
                <?foreach($news as $item):?>
                    <?if($item['status']==1){
                        $status = 'Отправленна на модерацию';
                    }else if($item['status']==0){
                        $status = 'Отклоненна';
                    }else{
                        $status = 'Опубликована';
                    }?>
                <tr onclick="news(<?=$item['id']?>)">
                    <th><?=$item['name']?></th>
                    <th><?=formatDate($item['date'])?></th>
                    <th><?=$status?></th>
                </tr>
                <?endforeach;?>
            </table>
            <br>
            <br>
            <a href="?p=add_new" class="btn_three add_table">Добавить статью</a>
            </div>
                    

           
        </div>
    </section>
    <?}?>
    <script src="assets/js/vklad_users.js"></script>