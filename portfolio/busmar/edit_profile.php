

<?php
if(!isset($_SESSION['uid'])){
    header('location:?page=signup');
}
if(isset($_POST['edit_profile'])){
$errors = array();
foreach($_POST as $key => $value){
    $data[$key] = $value;
}
$uploaddir = 'assets/img/profile/avatar/';
$uploadfile = $uploaddir.time().rand(111,999).'.'.basename($_FILES['img']['type']);


if((basename($_FILES['img']['type'])=='')){
    $uploadfile = $usersee['img'];
}

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

if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'неверный формат почты';
}


if ( $data['pass'] != $data['repass'] )
{
    $errors[] = 'Повторный пароль введен не верно!';
}
if(!empty($_POST['pass'])){
    $password = password_hash($data['pass'], PASSWORD_DEFAULT);
}else{
    $password = $usersee['password'];
}
// print_r($_FILES);
if ( empty($errors) )
{ 

    $id = $usersee['id'];
   
    $state = $conn->prepare("UPDATE `user` 
    SET `surname`='{$data['surname']}',`name`='{$data['name']}',`patronymic`='{$data['patronymic']}',`email`='{$data['email']}',`password`='$password',`number`='{$data['number']}',`status`='{$usersee['status']}',`img`='$uploadfile' WHERE `id` = '$id'");
  $state ->execute();
    header('Location: ?p=edit_profile');
    // var_dump($data);
}else
{
   $error = array_shift($errors);
}

}
?>

<!DOCTYPE html>
<html lang="en">

    <header class="header scroll_header scroll_white_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="block">
        <div class="container">
            <div class="edit_profile_content">
                <div class="modal_title">
                    Редактирование профиля
                </div>
                <form class="edit_form" method="POST" name="edit_profile" enctype="multipart/form-data">
                    <div class="download_photo">
                        <img src="<?=$usersee['img']?>" alt="аватар" width="224px" height="234px">
                        <input type="file" name="img" id = "upload-file__input_1" class="upload-file__input">
                        <label class="upload-file__label" for="upload-file__input_1">
                            <img src="assets/img/news/pin.svg" alt="прикрепить">
                            <span class="upload-file__text">Прикрепить файл</span>
                        </label>
                    </div>
                    <div class="inputs_edit_prof">
                        <label class="">
                            <p class="form_txt2">Имя</p>
                            <input type="text" class="input2 big_input" name="name" value="<?=$usersee['name']?>">
                        </label>
                        <label class="">
                            <p class="form_txt2">Фамилия</p>
                            <input type="text" class="input2 big_input" name="surname" value="<?=$usersee['surname']?>">
                        </label>
                        <label class="">
                            <p class="form_txt2">Отчество</p>
                            <input type="text" class="input2 big_input" name="patronymic" value="<?=$usersee['patronymic']?>">
                        </label>
                        <label class="">
                            <p class="form_txt2">Номер </p>
                            <input type="text" class="input2 big_input" name = "number" value="<?=$usersee['number']?>">
                        </label>
                       
                        <label class="">
                            <p class="form_txt2">Пароль</p>
                            <input type="text" class="input2 big_input" name ="pass">
                        </label>
                        <label class="">
                            <p class="form_txt2">Повтор пароля</p>
                            <input type="text" class="input2 big_input" name="repass">
                        </label>
                        <label class="">
                            <p class="form_txt2">Почта</p>
                            <input type="text" class="input2 big_input" name="email" value="<?=$usersee['email']?>">
                        </label>
                       
                    </div>
                    <input type="submit" class="btn_one sign_in_btn" value="Сохранить" name="edit_profile">
                </form> 
            </div>
        </div>
    </section>
