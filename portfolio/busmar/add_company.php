<?php
  if($usersee['status']==0){
    header('Location:?p=profile');
}
if(isset($_POST['add_comp'])){
    if(isset($_POST['happy'])){
        $otrasl = $_POST['happy'].', ';
    }else{
        $otrasl ='';
    }
    if(isset($_POST['happy2'])){
        $otrasl2 = $_POST['happy2'].', ';
    }else{
        $otrasl2 ='';
    }
    if(isset($_POST['happy3'])){
        $otrasl3 = $_POST['happy3'].', ';
    }else{
        $otrasl3 ='';
    }
    if(isset($_POST['happy4'])){
        $otrasl4 = $_POST['happy4'].', ';
    }else{
        $otrasl4 ='';
    }
    if(isset($_POST['happy5'])){
        $otrasl5 = $_POST['happy5'].', ';
    }else{
        $otrasl5 ='';
    }
    if(isset($_POST['happy6'])){
        $otrasl6 = $_POST['happy6'].', ';
    }else{
        $otrasl6 ='';
    }
    if(isset($_POST['happy7'])){
        $otrasl7 = $_POST['happy7'].', ';
    }else{
        $otrasl7 ='';
    }
    if(isset($_POST['happy8'])){
        $otrasl8 = $_POST['happy8'].', ';
    }else{
        $otrasl8 ='';
    }
    if(isset($_POST['happy9'])){
        $otrasl9 = $_POST['happy9'].', ';
    }else{
        $otrasl9 ='';
    }
    if(isset($_POST['happy10'])){
        $otrasl10 = $_POST['happy10'].', ';
    }else{
        $otrasl10 ='';
    }
    if(isset($_POST['happy11'])){
        $otrasl11 = $_POST['happy11'].', ';
    }else{
        $otrasl11 ='';
    }

    $otrasli = $otrasl . $otrasl2 . $otrasl3 . $otrasl4 . $otrasl5. $otrasl6. $otrasl7. $otrasl8. $otrasl9. $otrasl10. $otrasl11;
    // echo $otrasli;
    $state=$conn->prepare("INSERT INTO `company`(`name`, `adress`, `comment`, `otrasli`, `id_user`, `status`) 
    VALUES ('{$_POST['name']}','{$_POST['adress']}','{$_POST['text']}','$otrasli','{$usersee['id']}','0')");
    $state->execute();
    header("location:?p=profile");
    
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
                    Добавить компанию
                </span>
            </p>
            <form class="add_form" method="POST" name="add_comp" enctype="multipart/form-data">
                <div class="inputs_add_company">
                    <label class="">
                            <p class="form_txt2">Название компании</p>
                            <input type="text" class="input2 big_input" name="name" value="">
                        </label>
                        <label class="">
                            <p class="form_txt2">Адрес сайта</p>
                            <input type="text" class="input2 big_input" name="adress" value="">
                        </label>
                        <label class="">
                            <p class="form_txt2">Комментарий</p>
                            <textarea type="text" class="input2 big_input text_area2" name="text"></textarea>
                        </label>
                        <p class="form_txt2">Отрасли</p>
                        <div class="checkbox_wrap">
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy" name="happy" value="Интернет-магазин">
                                <label for="happy"><p class="label_check_txt">Интернет-магазин</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy2" name="happy2" value="Поиск работы">
                                <label for="happy2"><p class="label_check_txt">Поиск работы</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy3" name="happy3" value="Бизнес">
                                <label for="happy3"><p class="label_check_txt">Бизнес</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy4" name="happy4" value="Автомобили">
                                <label for="happy4"><p class="label_check_txt">Автомобили</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy5" name="happy5" value="Животные">
                                <label for="happy5"><p class="label_check_txt">Животные</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy6" name="happy6" value="Образование">
                                <label for="happy6"><p class="label_check_txt">Образование</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy7" name="happy7" value="Здоровье">
                                <label for="happy7"><p class="label_check_txt">Здоровье</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy8" name="happy8" value="Юридические услуги">
                                <label for="happy8"><p class="label_check_txt">Юридические услуги</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy9" name="happy9" value="yes">
                                <label for="happy9"><p class="label_check_txt">Еда, продукты</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy10" name="happy10" value="Еда, продукты">
                                <label for="happy10"><p class="label_check_txt">Семья, дети</p></label>
                            </div>
                            <div class="chechbox_container">
                                <input type="checkbox" class="custom_checkbox" id="happy11" name="happy11" value="Другое">
                                <label for="happy11"><p class="label_check_txt">Другое</p></label>
                            </div>
                        </div>
                </div>
                <input type="submit" class="btn_one sign_in_btn" value="Добавить" name="add_comp">

            </form>
        </div>
    </section>
</section>