
<?php
// include('assets/php/functions.php');
if($usersee['status']==0){
    header('Location:?p=profile');
}
    if(isset($_GET['category_id'])){
        $news_list=$conn->query("SELECT * FROM `news` WHERE `status` = '2' AND `category_news` = '{$_GET['category_id']}'")->fetchAll(2);

    }else{
        $news_list = $conn ->query("SELECT * FROM `news` WHERE `status` = '2'")->fetchAll(2);
    }
    $category_news = $conn->query("SELECT * FROM `category_news`")->fetchAll(2);
?>
<section class="header_and_ban">
        <header class="header scroll_header">
            <div class="container">
                <?include('assets/php/header.php');?>
            </div>
        </header>
        <section class="banner service_banner_bjd">
            <div class="container">
                <div class="banner_content_vfnk service_banner_content ">
                    <div class="banner_txt_wrap small_banner_txt">
                        <p class="banner_txt stat">
                            Лучшие <span class="pink_back_txt">статьи</span> от пользователей нашего сайта
                        </p>
                    </div>
                    <div class="news_banner_items">
                        <a href="?p=add_new" class="btn_one news_btn">Предложить статью</a>
                        <div class="news_banner_decor">
                            <img src="assets/img/news/arrow.svg" alt="задать вопрос" class="arrow_svg">
                            <img src="assets/img/news/pero.png" alt="задать вопрос" class="pero_png">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="block">
        <div class="container">
            <div class="category_block">
                <div class="answer_block_top">
                    <p class="title">
                        Категории
                    </p>
                    <img src="assets/img/news/decor.svg" alt="тетради" class="question_img nonsdfdf">
                </div>
                <div class="category_menu">
                <?foreach($category_news as $item):?>
                    <a href="?p=news&category_id=<?=$item['id']?>" class="category_link"><?=$item['name']?></a>
                <?endforeach;?>
                    <a href="?p=news" class="category_link">Всё</a>
                </div>
            </div>
            <div class="news_list">
                <?foreach($news_list as $news):?>
                <?$date = formatDate($news['date']);?>
                <?$author_id = $news['id_author'];
                $user = $conn -> query("SELECT * FROM `user` WHERE `id` = '$author_id'")->fetch(2);
                $cat_id = $news['category_news'];
                $category = $conn -> query("SELECT * FROM `category_news` WHERE `id` = '$cat_id'")->fetch(2);?>
                <a href="?p=one_news_item&id=<?=$news['id']?>">
                <div class="news_cart">
                    <div class="name_and_time">
                        <div class="author_avatar">
                            <img src="<?=$user['img'];?>" alt="аватар" width ="50px" height ="50px">
                            <h4><b><?=$user['name']?></b></h4>
                        </div>
                        <div class="time_ago">
                            <img src="assets/img/news/time.svg" alt="время">
                            <?=$date;?>
                        </div>
                    </div>
                    <div class="news_txt">
                        <h3><?=$news['name'];?></h3>
                        <h4><?=$news['text']?></h4>
                    </div>
                    <img src="<?=$news['files']?>" alt="картинка новости" class="news_photo">
                    <div class="cart_bottom_items">
                        <div class="left_items_cart_n">
                            <h4>Категория: <?=$category['name'];?></h4>
                            <div class="see_and_rev">  
                                <div class="status_cart">
                                    <img src="assets/img/news/see.svg" alt="просмотры">
                                    <?=$news['see']?>
                                </div>
                                <div class="status_cart">
                                    <img src="assets/img/news/review.svg" alt="отзывы">
                                    18к.
                                </div>
                            </div>
                        </div>
                        <img src="assets/img/news/like.svg" alt="лайк" class="like">
                    </div>

                </div>
            </a>
            <?endforeach;?>
            </div>
        </div>
    </section>
  