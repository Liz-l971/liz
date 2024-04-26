<?php
  if($usersee['id']==0){
    header('Location:?p=profile');
}
    $news = $conn->query("SELECT * FROM `news` WHERE `id` = '{$_GET['id']}'")->fetch(2);
    $author = $conn->query("SELECT * FROM `user` WHERE `id` = '{$news['id_author']}'")->fetch(2);
    $see = $news['see']+1;
    $state= $conn->prepare("UPDATE `news` SET `see`='$see' WHERE `id` = '{$_GET['id']}'");
    $state->execute();
    $reviews = $conn->query("SELECT * FROM `revievs` WHERE `id_news` = '{$news['id']}' ORDER BY id DESC")->fetchAll(2);
    $errors='';
    if(isset($_POST['add_rev'])){
        foreach($_POST as $key => $value){
            $data[$key] = $value;
        }
        $uploaddir = 'assets/img/revievs/';
        $uploadfile = $uploaddir.time().rand(111,999).'.'.basename($_FILES['img']['type']);
        if((basename($_FILES['img']['type'])=='')){
            $uploadfile = '';
        }
        if(basename($_FILES['img']['type'])=='svg+xml'){
            $uploadfile = $uploaddir.time().rand(111,999).'.svg';
        }
        
      

        if((empty($errors))&&(basename($_FILES['img']['type'])!='')){           
            if(!move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                $errors = "Ошибка загрузки файла";
        }
        }
        $date = date('Y-m-d H:i');
        $date = formatDate($date);
        $state = $conn->prepare("INSERT INTO `revievs`(`id_author`, `id_news`, `text`, `date`, `img`, `id_send`) VALUES ('{$usersee['id']}','{$_GET['id']}','{$data['text']}','$date','$uploadfile','0')");
        $state->execute();
        if(empty($errors)){
            echo '<script>document.location.href="?p=one_news_item&id='.$_GET['id'].'"</script>';
            // echo '<script>document.location.href="?p=one_news_item&id='.$_GET['id'].'#reviews"</script>';

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/header.js" defer></script>
    <script src="assets/js/drop-down_menu.js" defer></script>
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
            <div class="news_cart">
                <div class="name_and_time">
                    <div class="author_avatar">
                        <img src="<?=$author['img']?>" alt="аватар" width ="50px" height ="50px">
                        <h4><b><?=$author['name']?></b></h4>
                    </div>
                    <div class="time_ago">
                        <img src="assets/img/news/time.svg" alt="время">
                        <?$date = formatDate($news['date']);?>
                        <?=$date?>
                    </div>
                </div>
                <div class="news_txt">
                    <p class="title" style="margin-bottom: 0;"><?=$news['name']?></p>
                </div>
                <img src="<?=$news['files']?>" alt="картинка новости" class="news_photo">
               <div class="one_cart_txt"> <h4><?=$news['text']?></h4></div>
                <div class="cart_bottom_items">
                    
                    <div class="left_items_cart_n">
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
        </div>
    </section>
    <section class="block review_news" id="reviews">
        <div class="container">
            <div class="review_news_content">
                <p class="title">Комментарии</p>
                <div class="review_input">
                    <form action="" method="POST" name="add_rev" class="review_news_form" enctype="multipart/form-data">
                        <textarea type="text" class="review_news_inp" name="text" placeholder="Оставьте комментарий..."></textarea>
                    <div class="input_buttons">
                        <input type="file" name="img" id = "upload-file__input_1" class="upload-file__input">
                        <label class="upload-file__label" for="upload-file__input_1">
                            <img src="assets/img/news/pin.svg" alt="прикрепить">
                            <span class="upload-file__text"></span>
                        </label>
                            <input type="submit" class="btn_three_rteoi" value="Отправить" name="add_rev">
                       
                    </div>
                    </form>
                </div>
                <div class="reviews_scroll">
                    <div class="review_block">
                        <?foreach($reviews as $item):?>
                        <?$author_r = $conn->query("SELECT * FROM `user` WHERE `id` = '{$item['id_author']}'")->fetch(2);?>
                        <div class="review_item">
                            <div class="name_and_time">
                                <div class="author_avatar">
                                    <img src="assets/img/news/avatar.png" alt="аватар">
                                    <h4><b><?=$author_r['name']?></b></h4>
                                </div>
                                <div class="time_ago">
                                    <img src="assets/img/news/time.svg" alt="время">
                                    <?=formatDate($item['date'])?>
                                </div>
                            </div>
                            <div class="review_news_txt">
                                <h4><?=$item['text']?></h4>
                            </div>
                            <img src="<?=$item['img']?>" alt="" width="300px">
                            <div class="review_news_menu">
                                <div class="status_cart">
                                    <img src="assets/img/news/like.svg" alt="просмотры" width="39px" class="rev_like">
                                    18к.
                                </div>
                                <a href="" class="step_profile_link">Ответить</a>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer_menu">
                <div class="fotter_menu_block">
                    <p class="title_menu_block">
                        Главная
                    </p>
                    <a href="" class="footer_menu_link">
                        О нас
                    </a>
                    <a href="" class="footer_menu_link">
                        Ответы на частые вопросы
                    </a>
                    <a href="" class="footer_menu_link">
                        Заявка на звонок
                    </a>
                    <a href="" class="footer_menu_link">
                        Наши работы
                    </a>
                </div>
                <div class="fotter_menu_block">
                    <p class="title_menu_block">
                        Услуги
                    </p>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                </div>
                <div class="fotter_menu_block">
                    <p class="title_menu_block">
                        Статьи
                    </p>
                    <a href="" class="footer_menu_link">
                        Реклама и PR
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Seo-продвижение
                    </a>
                    <a href="" class="footer_menu_link">
                        Все статьи
                    </a>
                </div>
                <div class="footer_contacts_block">
                    <div class="social">
                        <img src="../img/footer/phone.svg" alt="номер телефона">
                        <h4><a href="tel:+79600535010"><span class="pink_text"><b>+79600535010</b></span></a></h4>
                    </div>
                    <div class="social">
                        <img src="../img/footer/mail.svg" alt="почта">
                        <h4><a href="mailto:"><span class="pink_text"><b>bus.mar@gmail.com</b></span></a></h4>
                    </div>
                    <div class="logo_footer">
                        <img src="../img/footer/logo_footer.svg" alt="логотип">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>