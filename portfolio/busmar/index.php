<?php
    session_start();
    include('assets/php/data_base.php');
    include('assets/php/functions.php');
    if((isset($_SESSION['uid']))){
        $session_uid = $_SESSION['uid'];
        $usersee = $conn->query("SELECT * FROM `user` WHERE `id` = '$session_uid'")->fetch(2);
       
    }
    $services2 = $conn->query("SELECT * FROM `services`")->fetchAll(2);
$category_news = $conn->query("SELECT * FROM `category_news`")->fetchAll(2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/accordion.js" defer></script>
    <script src="assets/js/drop-down_menu.js" defer></script>
    <script src="assets/js/header.js" defer></script> 
    <script src="./assets/js/burger.js" defer></script>
    <script src="assets/js/downloadfile.js" defer></script>
    <script src="assets/js/table_profile.js" defer></script>
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['p'])){
            $page = $_GET['p'];
            if($page=='admin_panel'){
                include('admin_panel.php');
            }
            if($page=='company_profile'){
                include('company_profile.php');
            }
            if($page=='edit_profile'){
                include('edit_profile.php');
            }
            if($page=='news'){
                include('news.php');
            }
            if($page=='add_new'){
                include('add_new.php');
            }
            if($page=='one_news_item'){
                include('one_news_item.php');
            }
            if($page=='user_list'){
                include('users_list.php');
            }
            if($page=='order_list'){
                include('order_list.php');
            }
            if($page=='profile'){
                include('profile.php');
            }
            if($page=='edit_company'){
                include('edit_company.php');
            }
            if($page=='proposed_articles_list'){
                include('proposed_articles_list.php');
            }
            if($page=='service_page'){
                include('service_page.php');
            }
            if($page=='services'){
                include('services.php');
            }
            if($page=='users_list'){
                include('users_list.php');
            }
            if($page=='add_company'){
                include('add_company.php');
            }
            if($page=='add_service'){
                include('add_service.php');
            }
            if($page=='category_list'){
                include('category_list.php');
            }
            if($page=='uslugi_list'){
                include('uslugi_list.php');
            }
            if($page=='user_profile'){
                include('user_profile.php');
            }
            if($page=='one_news_item_sug'){
                include('one_news_item_sug.php');
            }
            if($page=='zay_list'){
                include('zay_list.php');
            }
            if($page=='add_rev'){
                include('add_rev.php');
            }
            
            if($page=='exit'){
                session_unset();
                header('Location: ?');
                // include('add_service.php');
            }
            
        }else{
            include('main.php');
        }
    ?>
<footer class="footer">
    <div class="container">
        <div class="footer_menu">
            <div class="fotter_menu_block">
                <p class="title_menu_block">
                    Главная
                </p>
                <a href="#about_us" class="footer_menu_link">
                    О нас
                </a>
                <a href="#questions" class="footer_menu_link">
                    Ответы на частые вопросы
                </a>
                <a href="#zayavka" class="footer_menu_link">
                    Заявка на звонок
                </a>
                <a href="#examples" class="footer_menu_link">
                    Наши работы
                </a>
            </div>
            <div class="fotter_menu_block">
            <p class="title_menu_block">
                    Услуги
                </p>
            <?foreach($services2 as $item):?>
                <a href="?p=service_page&id=<?=$item['id']?>" class="footer_menu_link"><?=$item['name']?></a>
            <?endforeach;?>
            </div>
            <div class="fotter_menu_block">
            <p class="title_menu_block">
                Статьи
            </p>
            <?foreach($category_news as $item):?>
                <a href="?p=news&category_id=<?=$item['id']?>" class="footer_menu_link"><?=$item['name']?></a>
            <?endforeach;?>
            </div>
            <div class="footer_contacts_block">
                <div class="social">
                    <img src="assets/img/footer/phone.svg" alt="номер телефона">
                    <h4><a href="tel:+79600535010"><span class="pink_text"><b>+79600535010</b></span></a></h4>
                </div>
                <div class="social">
                    <img src="assets/img/footer/mail.svg" alt="почта">
                    <h4><a href="mailto:"><span class="pink_text"><b>bus.mar@gmail.com</b></span></a></h4>
                </div>
                <div class="logo_footer">
                    <img src="assets/img/footer/logo_footer.svg" alt="логотип">
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
