<?php
$category = $conn->query("SELECT * FROM `category_news`")->fetchAll(2);
if(isset($_POST['add_cat'])){
    $state=$conn->prepare("INSERT INTO `category_news`(`name`) VALUES ('{$_POST['name']}')");
    $state->execute();
    header('Location:?p=category_list');
}
if(isset($_POST['red_cat'])){
    $state=$conn->prepare("UPDATE `category_news` SET `name`='{$_POST['name']}' WHERE `id` = '{$_GET['red_cat']}'");
    $state->execute();
    header('Location:?p=category_list');
}
?>
    <header class="header scroll_header scroll_white_header">
        <div class="container">
        <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="block">
        <div class="container">
            <div class="users">
            <h2 class="name_page">
                Категории
            </h2>
            <?if(isset($_GET['add_cat'])):?>
            <form method="POST" action="" class="block_search" name="add_cat">
                    <input type="text" placeholder="Поиск" class="search" name="name">
                    <input type="submit" class="add_usluga" value="Добавить" name="add_cat">
                </form>
            <?endif;?>
            <?if(isset($_GET['red_cat'])):?>
                <?$category_ed= $conn->query("SELECT * FROM `category_news` WHERE `id` = '{$_GET['red_cat']}'")->fetch(2);?>
            <form method="POST" action="" class="block_search" name="red_cat">
                    <input type="text" placeholder="Поиск" class="search" name="name" value="<?=$category_ed['name']?>">
                    <input type="submit" class="add_usluga" value="Сохранить" name="red_cat">
                </form>
            <?endif;?>
            <?if((!isset($_GET['add_cat']))&&(!isset($_GET['red_cat']))):?>
            <a href="?p=category_list&add_cat" class="add_usluga">Добавить</a>
            <?endif;?>
            <div class="uslugs_list">
            <?foreach($category as $item):?>
                <div class="stroke_list_uslug">
                    
                    <div class="stroke_list_uslug_content">
                        <p class="name_uslug">
                           <?=$item['name']?>
                        </p>
                        <div class="stroke_list_uslug_content_btns">
                            <a href="?p=category_list&red_cat=<?=$item['id']?>" class="btn_yelow_update">Редактировать</a>
                            <a href="del_cat.php?del_cat=<?=$item['id']?>" class="btn_delete">Удалить</a>
                        </div>
                    </div>
                   
                </div>
                <?endforeach;?>
                
            </div>
            </div>
        </div>
    </section>