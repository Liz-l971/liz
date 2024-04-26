<?php
  if($usersee['status']==0){
    header('Location:?p=profile');
}
$company = $conn->query("SELECT * FROM `company` WHERE `id_user` = '{$usersee['id']}'")->fetchAll(2);
$services = $conn->query("SELECT * FROM `services`")->fetchAll(2);
// if(isset($_POST['add_comp'])){
//     if(isset($_POST['happy'])){
//         $otrasl = $_POST['happy'].', ';
//     }else{
//         $otrasl ='';
//     }
//     if(isset($_POST['happy2'])){
//         $otrasl2 = $_POST['happy2'].', ';
//     }else{
//         $otrasl2 ='';
//     }
//     if(isset($_POST['happy3'])){
//         $otrasl3 = $_POST['happy3'].', ';
//     }else{
//         $otrasl3 ='';
//     }
//     if(isset($_POST['happy4'])){
//         $otrasl4 = $_POST['happy4'].', ';
//     }else{
//         $otrasl4 ='';
//     }
//     if(isset($_POST['happy5'])){
//         $otrasl5 = $_POST['happy5'].', ';
//     }else{
//         $otrasl5 ='';
//     }
//     if(isset($_POST['happy6'])){
//         $otrasl6 = $_POST['happy6'].', ';
//     }else{
//         $otrasl6 ='';
//     }
//     if(isset($_POST['happy7'])){
//         $otrasl7 = $_POST['happy7'].', ';
//     }else{
//         $otrasl7 ='';
//     }
//     if(isset($_POST['happy8'])){
//         $otrasl8 = $_POST['happy8'].', ';
//     }else{
//         $otrasl8 ='';
//     }
//     if(isset($_POST['happy9'])){
//         $otrasl9 = $_POST['happy9'].', ';
//     }else{
//         $otrasl9 ='';
//     }
//     if(isset($_POST['happy10'])){
//         $otrasl10 = $_POST['happy10'].', ';
//     }else{
//         $otrasl10 ='';
//     }
//     if(isset($_POST['happy11'])){
//         $otrasl11 = $_POST['happy11'].', ';
//     }else{
//         $otrasl11 ='';
//     }

//     $otrasli = $otrasl . $otrasl2 . $otrasl3 . $otrasl4 . $otrasl5. $otrasl6. $otrasl7. $otrasl8. $otrasl9. $otrasl10. $otrasl11;
//     // echo $otrasli;
//     $state=$conn->prepare("INSERT INTO `company`(`name`, `adress`, `comment`, `otrasli`, `id_user`, `status`) 
//     VALUES ('{$_POST['name']}','{$_POST['adress']}','{$_POST['text']}','$otrasli','{$usersee['id']}','0')");
//     $state->execute();
//     header("location:?p=profile");
    
// }
$error_id_comp ='';
$error_id_ser ='';
if(isset($_POST['add_ser_u'])){
    $error_id_comp ='';
    $error_id_ser ='';
    $id_company = $_POST['id_company'];
    $text = $_POST['text'];
    if(empty($id_company)){
        $error_id_comp = 'Выберите компанию';
    }
    if(empty($_POST['id_service'])){
        $error_id_ser ='Выберите услугу';
    }
    if((empty($error_id_comp))&&(empty($error_id_ser))){
    foreach($_POST['id_service'] as $key=>$value){
        $date = date("d.m.y H:i");
       $state =$conn->prepare("INSERT INTO `order`(`id_user`, `id_service`, `id_company`, `text`, `date`, `status`) 
       VALUES ('{$usersee['id']}','$value','$id_company','$text','$date','1')");
       $state->execute();
    }
    // var_dump($_POST);
    // echo $_GET['last'];
    header('Location: ?p='.$_GET['last'].'&id='.$_GET['id']);
    }
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
            <p class="title">
                <span class="white">
                    Подключить услугу
                </span>
            </p>
            <form class="add_form" method="POST" name="add_ser_u">
                <div class="inputs_add_company">
          
                        <label class="">
                            <p class="form_txt2">Компания</p>
                            <select name="id_company" id=" " class="input2 big_input">
                                <option value="">Выберите компанию</option>
                                <?foreach($company as $item):?>
                                    <option value="<?=$item['id']?>" ><?=$item['name']?></option>
                                <?endforeach;?>
                               
                            </select>
                            <?if(empty($company)){?>
                                    <h4>У вас нет ни одной компании</h4><br>
                                    <a href="?p=add_company" class="step_profile_link">Добавить компанию</a>
                                <?}?>
                            <p class="error_txt"><?=$error_id_comp?></p>
                        </label>
                        <label class="">
                            <p class="form_txt2">Комментарий</p>
                            <textarea type="text" class="input2 textarea2 service_area" name="text"></textarea>
                        </label>
                        <p class="form_txt2">Услуги</p>
                       
                        <div class="checkbox_wrap">
                            <?foreach($services as $item):?>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="<?=$item['id']?>" name="id_service[]" value="<?=$item['id']?>">
                                <label for="<?=$item['id']?>"><p class="label_check_txt"><?=$item['name']?></p></label>
                            </div>
                            <?endforeach;?>
                        </div>
                        <p class="error_txt"><?=$error_id_ser?></p>
                        <input type="submit" class="btn_one sign_in_btn" value="Отправить" name="add_ser_u">
            </form>
        </div>
    </section>
</section>