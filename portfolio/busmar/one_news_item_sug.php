<?php
  if($usersee['status']==0){
    header('Location:?p=profile');
}
    $news = $conn->query("SELECT * FROM `news` WHERE `id` = '{$_GET['id']}'")->fetch(2);
    $author = $conn->query("SELECT * FROM `user` WHERE `id` = '{$news['id_author']}'")->fetch(2);
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
                    <div class="btn_orderds">
                        <a href="prinyat_new.php?id_new=<?=$news['id']?>" class="btn_one sign_in_btn">Принять</a>
                        <a href="otkl_new.php?id_new=<?=$news['id']?>" class="btn_three">Отклонить</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
   