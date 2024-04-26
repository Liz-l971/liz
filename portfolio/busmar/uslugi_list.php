
    <?php
        $services = $conn->query("SELECT * FROM `services`")->fetchAll(2);
        $error_serv ='';
        $errors_img ='';
        $post_name='';
        $post_desk='';
        $post_cost='';
        $post_short='';
        if(isset($_POST['add_serv'])){
            $post_name=$_POST['name'];
            $post_desk=$_POST['description'];
            $post_cost=$_POST['cost'];
            $post_short=$_POST['short_desk'];
            $uploaddir = 'assets/img/services/service_page/';
            $uploadfile = $uploaddir.time().rand(111,999).'.'.basename($_FILES['img']['type']);
            
            foreach($_POST as $key =>$value){
                if(empty($value)){
                    $error_serv = 'Заполните все поля!';
                }
            }
            if(basename($_FILES['img']['type'])=='svg+xml'){
                $uploadfile = $uploaddir.time().rand(111,999).'.svg';
            }
        
            if((basename($_FILES['img']['type'])!='')){
        
                if((($_FILES['img']['type'])!=('image/'.basename($_FILES['img']['type'])))||((basename($_FILES['img']['type']))=='svg+xml')){
                    $errors_img = "Неверный формат файла";
                }
            }
                if(!move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                    $errors_img = "Ошибка загрузки файла";
                }

            if((empty($error_serv))&&(empty($errors_img))){
                $state=$conn->prepare("INSERT INTO `services`(`name`,`short_desk`, `description`, `cost`,`img`) 
                VALUES ('{$_POST['name']}','{$_POST['short_desk']}','{$_POST['description']}','{$_POST['cost']}','$uploadfile')");
                $state->execute();
                header('location:?p=uslugi_list');
            }
        }
        if(isset($_POST['edit_ser'])){
            $services_ed = $conn->query("SELECT * FROM `services` WHERE `id` = '{$_GET['edit_ser']}'")->fetch(2);
            $post_name=$_POST['name'];
            $post_desk=$_POST['description'];
            $post_cost=$_POST['cost'];
            $uploaddir = 'assets/img/services/service_page/';
            $uploadfile = $uploaddir.time().rand(111,999).'.'.basename($_FILES['img']['type']);
            
            foreach($_POST as $key =>$value){
                if(empty($value)){
                    $error_serv = 'Заполните все поля!';
                }
            }
            if((basename($_FILES['img']['type'])=='')){
                $uploadfile = $services_ed['img'];
            }else{
                if(basename($_FILES['img']['type'])=='svg+xml'){
                    $uploadfile = $uploaddir.time().rand(111,999).'.svg';
                }
            
                if((basename($_FILES['img']['type'])!='')){
            
                    if((($_FILES['img']['type'])!=('image/'.basename($_FILES['img']['type'])))||((basename($_FILES['img']['type']))=='svg+xml')){
                        $errors_img = "Неверный формат файла";
                    }
                }
                    if(!move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                        $errors_img = "Ошибка загрузки файла";
                    }
            }
            
          

            if((empty($error_serv))&&(empty($errors_img))){
                $state=$conn->prepare("UPDATE `services` SET 
                `name`='{$_POST['name']}',`short_desk` = '{$_POST['short_desk']}',`description`='{$_POST['description']}',`cost`='{$_POST['cost']}',`img`='$uploadfile' WHERE `id` = '{$services_ed['id']}'");
                $state->execute();
                header('location:?p=uslugi_list');
            }
        }
    ?>
    <section <?if((isset($_GET['add_service']))&&($_GET['p']=='uslugi_list')){ echo 'style = "display: flex;"';}?> class="modal">
        <div class="modal_content2">
            <a href="?p=uslugi_list" class="modal_close_btn2">✕</a>
           <div class="modal_title2">Добавить услугу
            <div class="line_title2"></div>
           </div> 
        <form action="" method="POST" name="add_serv" class="sign_up_form2" enctype="multipart/form-data">
            <label class="add_ser_label">
                <p class="form_txt2">Наименование услуги</p>
                <input type="text2" class="input2" name="name" value="<?=$post_name?>">
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Краткое описание</p>
                <input type="text2" class="input2" name="short_desk" value="<?=$post_short?>">
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Подробное описание</p>
                <textarea type="text" class="input2 textarea2" name="description"><?=$post_desk?></textarea>
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Цена</p>
                <input type="number" class="input2" name="cost" value="<?=$post_cost?>">
            </label>
            <input type="file" name="img" id = "<?if(isset($_GET['add_service'])){echo 'upload-file__input_1';}?>" class="upload-file__input">
            <label class="upload-file__label file_service" for="<?if(isset($_GET['add_service'])){echo 'upload-file__input_1';}else{echo '';}?>">
                <img src="assets/img/news/pin.svg" alt="прикрепить">
                <span class="<?if(isset($_GET['add_service'])){echo 'upload-file__text';}?>">Прикрепить файл</span>
            </label>
            <p class="error_txt"><?=$error_serv?></p>
            <?if(empty($error_serv)):?>
                <p class="error_txt"><?=$errors_img?></p>
            <?endif;?>
            <input type="submit" class="btn_one sign_in_btn" name="add_serv" value="Войти">
    </div>
        </form>
    </section>
    <section <?if((isset($_GET['edit_ser']))&&($_GET['p']=='uslugi_list')){ echo 'style = "display: flex;"';}?> class="modal">
        <?$services_ed = $conn->query("SELECT * FROM `services` WHERE `id` = '{$_GET['edit_ser']}'")->fetch(2);?>
        <div class="modal_content2">
            <a href="?p=uslugi_list" class="modal_close_btn2">✕</a>
           <div class="modal_title2">Редактировать услугу
            <div class="line_title2"></div>
           </div> 
        <form action="" method="POST" name="edit_ser" class="sign_up_form2" enctype="multipart/form-data">
            <label class="add_ser_label">
                <p class="form_txt2">Наименование услуги</p>
                <input type="text2" class="input2" name="name" value="<?=$services_ed['name']?>">
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Краткое описание</p>
                <input type="text2" class="input2" name="short_desk" value="<?=$services_ed['short_desk']?>">
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Подробное описание</p>
                <textarea type="text" class="input2 textarea2" name="description"><?=$services_ed['description']?></textarea>
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Цена</p>
                <input type="number" class="input2" name="cost" value="<?=$services_ed['cost']?>">
            </label>
            <input type="file" name="img" id = "upload-file__input_1" class="upload-file__input">
            <label class="upload-file__label file_service" for="upload-file__input_1">
                <img src="assets/img/news/pin.svg" alt="прикрепить">
                <span class="upload-file__text">Прикрепить файл</span>
            </label>
            <p class="error_txt"><?=$error_serv?></p>
            <?if(empty($error_serv)):?>
                <p class="error_txt"><?=$errors_img?></p>
            <?endif;?>
            <input type="submit" class="btn_one sign_in_btn" name="edit_ser" value="Сохранить">
    </div>
        </form>
    </section>
    <section <?if((isset($_GET['del_ser']))&&($_GET['p']=='uslugi_list')){ echo 'style = "display: flex;"';}?> class="modal">
        <div class="modal_content2">
            <a href="?p=uslugi_list" class="modal_close_btn2">✕</a>
            <div class="modal_delete">
                <h2>Вы уверенны что хотите удалить услугу?</h2>
                <a href="del_ser.php?del_ser=<?=$_GET['del_ser']?>" class="btn_one sign_in_btn">Да, удалить</a>
            </div>
    </section>
    <header class="header scroll_header scroll_white_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="section_users">
        <div class="container">
            <h2 class="name_page">
                Услуги
            </h2>
            <a href="?p=uslugi_list&add_service" class="add_usluga">Добавить</a>
            <div class="uslugs_list">
                <?foreach($services as $item):?>
                <div class="stroke_list_uslug">
                    <div class="stroke_list_uslug_content">
                        <p class="name_uslug">
                           <?=$item['name']?>
                        </p>
                        <div class="stroke_list_uslug_content_btns">
                            <a href="?p=uslugi_list&edit_ser=<?=$item['id']?>" class="btn_yelow_update">Редактировать</a>
                            <a href="?p=uslugi_list&del_ser=<?=$item['id']?>" class="btn_delete">Удалить</a>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
                
            </div>
        </div>
    </section>