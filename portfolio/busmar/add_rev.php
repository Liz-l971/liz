<?php
  if($usersee['status']==0){
    header('Location:?p=profile');
}
if(isset($_POST['add_rew'])){
    $state = $conn->prepare("INSERT INTO `review_ser`( `text`, `ball`, `id_ser`, `id_user`) VALUES ('{$_POST['text']}','{$_POST['ball']}','{$_GET['id_ser']}','{$usersee['id']}')");
    $state->execute();
    header('Location:?p=company_profile&id='.$_GET['id']);
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
                <p class="title"><span class="white">Добавить отзыв</span></p>
                <form class="add_form" method="POST" name="add_rew" enctype="multipart/form-data">
                 
                    <div class="inputs_add_new">
                        <label class="">
                            <p class="form_txt">Текст</p>
                            <textarea type="text" class="input2 big_input text_area2" name="text" height="100px"></textarea>
                        </label>
                        <label class="">
                            <select name="ball" id="" class="input2 big_input">
                                <option value="0">Выберитье оценку</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                
                            </select>
                        </label>
                       
                    </div>
                    <div class="inputs_reg">
                        <input type="submit" class="btn_one sign_in_btn" value="Отправить" name="add_rew">
                    </div>
           
                </form> 
            </div>
        </div>
    </section>