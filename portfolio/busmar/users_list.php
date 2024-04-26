<?php
    $user_active = $conn->query("SELECT * FROM `user` WHERE `status` = '1'")->fetchAll(2);
    $user_block = $conn->query("SELECT * FROM `user` WHERE `status` = '0'")->fetchAll(2);
    if(isset($_GET['block_user'])){
        $state = $conn->prepare("UPDATE `user` SET `status`='0' WHERE `id` = '{$_GET['block_user']}'");
        $state->execute();
        header('Location: ?p=user_list');
    }
    if(isset($_GET['unlock_user'])){
        $state = $conn->prepare("UPDATE `user` SET `status`='1' WHERE `id` = '{$_GET['unlock_user']}'");
        $state->execute();
        header('Location: ?p=user_list');
    }
?>  
    <header class="header scroll_header scroll_white_header">
        <div class="container">
        <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="section_users">
        <div class="container">
            <h2 class="name_page">
                Пользователи
            </h2>
            <div class="block_content_admin-panel">
                <form action="" class="block_search">
                    <input type="text" placeholder="Поиск" class="search">
                    <a href="" class="btn_search">Найти</a>
                </form>
                <div class="vk">
                    <div class="tab_list">
                      <button class="tablinks_list active_list" onclick="openCity(event, 'Kazan')">Активные</button>
                      <button class="tablinks_list" onclick="openCity(event, 'Moskow')">Заблокированные</button>
                    </div>
                    <div id="Kazan" class="tabcontent_list">
                    <?foreach($user_active as $item):?>
                        <div class="stroke_users_list">
                            <div class="stroke_users_list_content">
                                <p class="fio_users_list">
                                    <?=$item['surname']?> <?=$item['name']?>  <?=$item['patronymic']?> 
                                </p>
                                <hr>
                                <p class="email_users_list">
                                    <?=$item['email']?>
                                </p>
                                <hr>
                                <a href="?p=user_list&block_user=<?=$item['id']?>" class="ban_btn_user_list">
                                    Заблокировать
                                </a>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                    <div id="Moskow" class="tabcontent_list" style="display: none;">
                    <?foreach($user_block as $item):?>
                        <div class="stroke_users_list">
                            <div class="stroke_users_list_content">
                                <p class="fio_users_list">
                                    <?=$item['surname']?> <?=$item['name']?>  <?=$item['patronymic']?> 
                                </p>
                                <hr>
                                <p class="email_users_list">
                                    <?=$item['email']?>
                                </p>
                                <hr>
                                <a href="?p=user_list&unlock_user=<?=$item['id']?>" class="ban_btn_user_list">
                                    Разблокировать
                                </a>
                            </div>
                        </div>
                    <?endforeach;?>                
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/admin_vklad_users.js"></script>
</body>
</html>