<?php
   if($usersee['status']==0){
    header('Location:?p=profile');
}
$company = $conn->query("SELECT * FROM `company` WHERE `id` = '{$_GET['id']}'")->fetch(2);
$order = $conn->query("SELECT * FROM `order` WHERE `id_user` = '{$company['id_user']}' AND `id_company` = '{$company['id']}' AND `status` = '2'")->fetchAll(2);
if(isset($_GET['otkl_ser'])){
    $state=$conn->prepare("UPDATE `order` SET `status`='0' WHERE `id` = '{$_GET['otkl_ser']}'");
    $state->execute();
    header('Location:?p=company_profile&id='.$company['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <header class="header scroll_header scroll_white_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="block">
        <div class="container">
            <p class="title"><?=$company['name']?></p>
            <div class="company_info">
                <div class="company_discr">
                    <div class="discription_line">
                        <img src="assets/img/company_profile/web.svg" alt="svg_company" class="svg_company">
                        <h3>Адрес сайта:</h3>
                        <h5><?=$company['adress']?></h5>
                    </div>
                    <div class="discription_line">
                        <img src="assets/img/company_profile/game.svg" alt="svg_company" class="svg_company">
                        <h3>Отрасли:</h3>
                        <h5><?=$company['otrasli']?></h5>
                    </div>
                    <div class="discription_line">
                        <img src="assets/img/company_profile/comment.svg" alt="svg_company" class="svg_company">
                        <h3>Комментарий:</h3>
                        <h5><?=$company['comment']?></h5>
                    </div>
                </div>
                <?if($company['id_user']==$usersee['id']):?>
                    <a href="?p=edit_company&id=<?=$company['id']?>" class="btn_one">Редактировать</a>
                <?endif;?>
            </div>
        </div>
    </section>
    <section class="block block_conn_serrvices">
        <div class="container">
            <p class="title">Подключенные услуги</p>
            <div class="services_container">
                <div class="services_slider">
                    <?if(empty($order)){?>
                        <p class="empty_txt">Услуги не подключены
                            <br>
                            <br>
                            <?if($company['id_user']==$usersee['id']):?>
                        <a href="?p=add_service&last=company_profile&id=<?=$company['id']?>" class="btn_three">Подключить</a>
                        <?endif;?>
                        </p>
                       
                    <?}?>

                    <?foreach($order as $item):?>
                    <?$service = $conn->query("SELECT * FROM `services` WHERE `id` = '{$item['id_service']}'")->fetch(2);?>
                    <div class="services_cart_conn">
                        <img src="assets/img/company_profile/back_one.svg" alt="фон услуги" class="ser_conn_black">
                        <div class="conn_service_cont">
                            <div class="title_and_cost">
                                <h3><?=$service['name']?></h3>
                                <h4><?=$service['cost']?>тыс./мес.</h4>
                            </div>
                            <!-- <div class="end_service_and_btn"> -->
                                <?if($company['id_user']==$usersee['id']):?>
                                <a href="?p=company_profile&id=<?=$company['id']?>&otkl_ser=<?=$item['id']?>" class="btn_three">Отключить</a>
                                <a href="?p=add_rev&id=<?=$company['id']?>&id_ser=<?=$service['id']?>" class="step_profile_link">Оставить отзыв</a>
                                <?endif;?>
                            <!-- </div> -->
                        </div>
                    </div>
                    <?endforeach;?>
                </div>
            </div>
            <?if(!empty($order)){?>
                <div class="arrow_slider_company"  id="prev_btn">
                <a class="arow_btn_comp" onclick="prev()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" viewBox="0 0 18 32" fill="none">
                            <path d="M17.3757 31.1098C16.9595 31.526 16.4393 31.7341 15.8671 31.7341C15.3468 31.7341 14.7746 31.526 14.3584 31.1098L0.624276 17.3757C0.208091 16.9595 -2.72803e-07 16.4393 -2.72803e-07 15.867C-2.72803e-07 15.2948 0.208091 14.7746 0.624276 14.3584L14.3584 0.624277C15.1908 -0.208092 16.5434 -0.208092 17.3757 0.624277C18.2081 1.45665 18.2081 2.80925 17.3757 3.64162L5.15029 15.867L17.3757 28.0925C18.2081 28.9248 18.2081 30.2775 17.3757 31.1098Z" fill="#D74FC7"/>
                        </svg>
                        </a>
                        <a class="arow_btn_comp" onclick="next()" id="next_btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="32" viewBox="0 0 18 32" fill="none">
                            <path d="M0.624277 31.1098C1.04046 31.526 1.56069 31.7341 2.13295 31.7341C2.65318 31.7341 3.22543 31.526 3.64162 31.1098L17.3757 17.3757C17.7919 16.9595 18 16.4393 18 15.867C18 15.2948 17.7919 14.7746 17.3757 14.3584L3.64162 0.624277C2.80925 -0.208092 1.45665 -0.208092 0.624277 0.624277C-0.208092 1.45665 -0.208092 2.80925 0.624277 3.64162L12.8497 15.867L0.624277 28.0925C-0.208092 28.9248 -0.208092 30.2775 0.624277 31.1098Z" fill="#D74FC7"/>
                        </svg>
                    </a>
                </div>
            <?}?>
          

        </div>
    </section>
    <script src="assets/js/slider_company.js"></script>
</body>
</html>