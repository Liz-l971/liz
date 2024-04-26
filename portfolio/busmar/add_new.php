<?php
    // include("assets/php/functions.php");
    if($usersee['status']==0){
        header('Location:?p=profile');
    }
    $category = $conn ->query("SELECT * FROM `category_news`")->fetchAll(2);
    if(isset($_POST['add_new'])){
        foreach($_POST as $key => $value){
            $data[$key] = $value;
        }
        $uploaddir = 'assets/img/news/news_photo/';
        $uploadfile = $uploaddir.time().rand(111,999).'.'.basename($_FILES['img']['type']);
        if((empty($errors))&&(basename($_FILES['img']['type'])!='')){

            if((($_FILES['img']['type'])!=('image/'.basename($_FILES['img']['type'])))||((basename($_FILES['img']['type']))=='svg+xml')){
                $errors[] = "Неверный формат файла";
            }
        }
        if((empty($errors))&&(basename($_FILES['img']['type'])!='')){    
            if(!move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
                $errors[] = "Ошибка загрузки файла";
            }
        }
        $author = $usersee['id'];
         $date = date('Y-m-d H:i:s');

        // $date = formatDate($date);
        $state = $conn -> prepare("INSERT INTO `news`( `name`, `text`,`date`, `category_news`, `id_author`, `files`,`see`,`status`)
         VALUES ('{$data['name']}','{$data['text']}','$date','{$data['category_news']}','$author','$uploadfile','0','1')");
         $state ->execute();
         header("location:?p=news");
    }
?>
<section class="header_and_ban">
    <header class="header scroll_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="block">
        <div class="container">
            <div class="edit_profile_content">
                <p class="title"><span class="white">Добавить статью</span></p>
                <form class="add_form" method="POST" name="add_new" enctype="multipart/form-data">
                 
                    <div class="inputs_add_new">
                        <label class="">
                            <p class="form_txt2">Название</p>
                            <input type="text" class="input2 big_input" name="name" value="">
                        </label>
                        <label class="">
                            <p class="form_txt">Текст</p>
                            <textarea type="text" class="input2 big_input text_area2" name="text"></textarea>
                        </label>
                        <label class="">
                            <select name="category_news" id="" class="input2 big_input">
                                <option value="0">Выберите категорию</option>
                                <?foreach($category as $item):?>
                                    <option value="<?=$item['id']?>"><?=$item['name'];?></option>
                                <?endforeach;?>
                            </select>
                        </label>
                       
                    </div>
                    <div class="inputs_reg">
                    <div class="download_photo">
                        <input type="file" name="img" id = "upload-file__input_1" class="upload-file__input">
                        <label class="upload-file__label" for="upload-file__input_1">
                            <img src="assets/img/news/pin.svg" alt="прикрепить">
                            <span class="upload-file__text">Прикрепить файл</span>
                        </label>
                    </div>
                        <input type="submit" class="btn_one sign_in_btn" value="Отправить" name="add_new">
                    </div>
           
                </form> 
            </div>
        </div>
    </section>
</section>