    <?php
    $user = $conn->query("SELECT * FROM `user` WHERE `id` ='{$_GET['id']}'")->fetch(2);
    $company = $conn ->query("SELECT * FROM `company` WHERE `id_user` = '{$user['id']}'")->fetchAll(2);
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
                    <p class="title">Профиль</p>
                </div>
                <div class="profile_info">
                    <div class="info_top">
                        <img src="<?=$user['img']?>" alt="аватар" class="avatar_img" width="224px" height="234px">
                        <!-- <img src="assets/img/profile/avatar.svg" alt="аватар" > -->
                        <div class="profile_txt_grid">
                            <div class="profile_info_block">
                                <h5><b><?=$user['name']?></b></h5>
                                <h5><b><?=$user['surname']?></b></h5>
                                <h5><b><?=$user['patronymic']?></b></h5>
                            </div>
                            <div class="profile_info_block rignidoin">
                                <h5><b><span class="underline">Контакты</span></b></h5>
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/phone.svg" alt="телефон">
                                    <h4><b>+<?=$user['number']?></b></h4>
                                </div>
        
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/mail.svg" alt="почта">
                                    <h4><b><?=$user['email']?></b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile_info_mobile">
                    <div class="info_top">
                    
                        <div class="profile_info_block">
                            <img src="assets/img/profile/avatar.svg" alt="аватар" class="avatar_img">
                            <div class="dfbppsd">
                                <h5><b>Иванова</b></h5>
                                <h5><b>Елизавета</b></h5>
                                <h5><b>Олеговна</b></h5>
                            </div>
                        </div>
                        <div class="profile_txt_grid">
                            <div class="profile_info_block rignidoin">
                                <h5><b><span class="underline">Контакты</span></b></h5>
                                <div class="contacts_profile_item">
                                    <img src="" alt="телефон">
                                    <h4><b>+79600535010</b></h4>
                                </div>
        
                                <div class="contacts_profile_item">
                                    <img src="assets/img/profile/mail.svg" alt="почта">
                                    <h4><b>ivanovaliza0053@gmail.com</b></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block profile_table">
        <div class="container">
            <div class="nav_table">
                <a class="nav_table_link nav_table_link-1 active_nav_profile_link" data-tab="1">Компании</a>
                <a class="nav_table_link nav_table_link-2" data-tab="2">Статьи</a>

            </div>
            <div class="profile_table_table profile_table-1 active_profile">
            <table>
                <?if(!empty($company)){?>
                    <tr>
                        <th>Название компании</th>
                        <th>Сайт</th>
                        <th>Статус</th>
                    </tr>
                <?}else{?>
                    <p class="empty_txt">Нет добавленных компаний</p>
                <?}?>
                <?foreach($company as $item):?>
                <tr onclick="company(<?=$item['id']?>)">
                    <th><?=$item['name'];?></th>
                    <th><?=$item['adress'];?></th>
                    <?if($item['status']==0):?>
                        <th>Услуги не подключенны</th> 
                    <?endif;?>
                  
                </tr>
                <?endforeach;?>
            </table>
            </div>
           
            <div class="profile_table_table profile_table-2">
            <table>
                <tr>
                    <th>Название компании</th>
                    <th>Сайт</th>
                    <th>Статус</th>
                </tr>
                <tr onclick="company()">
                    <th>Сайт</th>
                    <th>20.3</th>
                    <th>30.5</th>
                </tr>
                <tr onclick="company()">
                    <th>Статус</th>
                    <th>50.2</th>
                    <th>40.63</th>
                </tr>
            </table>
            </div>
                    

           
        </div>
    </section>
    <script src="assets/js/vklad_users.js"></script>