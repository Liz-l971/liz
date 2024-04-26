<?php
$services = $conn->query("SELECT * FROM `services` WHERE `id` = '{$_GET['id']}'")->fetch(2);

// $order_servise ->query("SELECT COUNT(`id`) as `count` FROM `order`")->fetch(2);
$reviews = $conn->query("SELECT * FROM `review_ser` WHERE `id_ser` = '{$services['id']}'")->fetchAll(2);

$char_array =[];
$char_array = explode(' ', $services['name']);;
$count_array = count($char_array);
$text = floor($count_array/2);

?>

    <section class="header_and_ban">
        <header class="header scroll_header">
            <div class="container">
                <?include('assets/php/header.php');?>
            </div>
        </header>
        <section class="banner service_banner">
            <div class="container">
                <div class="banner_content service_banner_content">
                    <div class="banner_txt_wrap">
                        <p class="banner_txt small_banner_txt">
                            <?$count_words =0;?>
                            <?foreach($char_array as $item):?>
                            <?if($count_words ==$text){?>
                                <span class="pink_back_txt"><?=$item?></span>
                            <?}else{
                                echo $item;
                            }?>
                            
                            <?$count_words++;?>
                            <?endforeach;?>
                        </p>
                        <?$services = $conn->query("SELECT * FROM `services` WHERE `id` = '{$_GET['id']}'")->fetch(2);?>
                        <h5><b><?=$services['short_desk']?></b></h5>
                        <?$last = 'service_page&id='.$services['id'];?>
                        <a href="?p=add_service&last=<?=$last?>" class="btn_one service_btn">Заказать</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="block">
        <div class="container">
            <div class="about_service_content">
                <p class="title">Об Услуге</p>
                <div class="description_service">
                    <h5 class="h5">
                    <?=$services['description']?>
                    </h5>
                    <img src="<?=$services['img']?>" alt="картинка услуги" class="service_photo">
                </div>
                <div class="service_info">
                    <div class="info_cart">
                        <h3 class="h3">Заказали более <span class="pink_back_txt">100</span> человек</h3>
                    </div>
                    <div class="info_cart">
                        <h3 class="h3">Средняя оценка <span class="yellow_back_txt">4.9</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="block comdfoni">
        <div class="container">
            <p class="title">Отзывы</p>
        </div>
        <div class="service_review_content">
            <div class="reviews_slide">
            <div class="review_slide">
            <?foreach($reviews as $item):?>
                <?$user=$conn->query("SELECT * FROM `user` WHERE `id` = '{$item['id_user']}'")->fetch(2);?>
                
                <div class="review_cart">
                    <h2><?=$user['name']?> <?=$user['surname']?></h2>
                    <h5><?=$item['text']?></h5>
                </div>
            
            <?endforeach?>
            </div>
            </div>
            <div class="slider_indicator">
         
            </div>
        </div>
    </section>
<script src="assets/js/reviews.js"></script>