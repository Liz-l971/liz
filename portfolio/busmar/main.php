
<?php

    include("assets/php/sign_up.php");
    include("assets/php/sign_in.php");
    $error_pass1='';
    $error_email1='';
    $empty_error ='';
if(isset($_POST['zayavka'])){
    if(isset($_POST['happy'])){
        $state = $conn->prepare("INSERT INTO `zayavka`(`number_phone`, `name`, `status`)
        VALUES ('{$_POST['number_phone']}','{$_POST['name']}','0')");
       $state->execute();
       header('Location: ?#zayavka');
    }

}
if(isset($_POST['sign_in'])){
    $email1=$_POST['email'];
    $user = $conn->query("SELECT * FROM `user` WHERE `email` = '$email1'")->fetch(2);
    // foreach()
  
    foreach($_POST as $key => $value){
        $data[$key] = $value;
        if(empty($value)){
            $empty_error = 'Заполните все поля!';
        }
    }

    if (!empty($user))
    {
        if (password_verify($_POST['pass'], $user['password']) ==1 )
        {
            $_SESSION['uid'] = $user['id'];
                header('Location: ?p=profile');
            
        }else
        {
            $error_pass1 = 'Неверно введен пароль!';
        }
 
    }else
    {
        $error_email1 = 'Пользователь с таким логином не найден!';
    }
    // header('Location: ?p=profile');
}
?>
<section <?if(isset($_GET['sign_in'])){ echo 'style = "display: flex;"';}?> class="modal">
        <div class="modal_content2">
            <a href="?" class="modal_close_btn">✕</a>
           <div class="modal_title2">Вход
           </div> 
        <form action="" method="POST" name="sign_in" class="sign_up_form">
            <div class="inputs_reg" style="flex-direction: column;">
            <label class="">
                <p class="form_txt2">Почта</p>
                <input type="text" class="input2" name="email">
                <p class="error_txt"><?=$error_email1?></p>
            </label>
            <label class="">
                <p class="form_txt2">Пароль</p>
                <input type="password" class="input2" name="pass" value="">
                <p class="error_txt"><?=$error_pass1?></p>
            </label>
            <p class="error_txt"><?=$empty_error?></p>
            <input type="submit" class="btn_one sign_in_btn" name="sign_in" value="Войти">
        </div>
        <br>
        <p class="form_txt">Нет аккаунта?</p>
        <a href="?sign_up" class="step_profile_link"><h4>Зарегестрироваться</h4></a>
    </div>
        </form>
    </section>
    <section  <?if(isset($_GET['sign_up'])){ echo 'style = "display: flex;"';}?> class="modal">
        <div class="modal_content">
            <a href="?" class="modal_close_btn">✕</a>
           <div class="modal_title">Регистрация
           </div> 

        <form action="" method="POST" name="sign_up" class="sign_up_form">
        <div class="inputs_edit_prof">
            <label class="">
                <p class="form_txt2 <?if(strlen($error_name)>1){echo'error_inp_txt';}else{echo '';}?>  bcv">Имя</p>
                <input type="text" class="input2 <?if(strlen($error_name)>1){echo'error_input';}else{echo '';}?> asd " name="name" value="<?if(isset($_POST['sign_up'])){echo $_POST['name'];}?>">
                <p class="error_txt"><?=$error_name?></p>
            </label>
            <label class="">
                <p class="form_txt2  <?if(strlen($error_surname)>1){echo'error_inp_txt';}else{echo '';}?> bcv">Фамилия</p>
                <input type="text" class="input2 asd" name="surname" <?if(strlen($error_surname)>1){echo'error_input';}else{echo '';}?> value="<?if(isset($_POST['sign_up'])){echo $_POST['surname'];}?>">
                <p class="error_txt"><?=$error_surname?></p>
            </label>
            <label class="">
                <p class="form_txt2  bcv">Отчество</p>
                <input type="text" class="input2 asd" name="patronymic" value="<?if(isset($_POST['patronymic'])){echo $_POST['surname'];}?>">
            </label>
            <label class="">
                <p class="form_txt2  <?if(strlen($error_number)>1){echo'error_inp_txt';}else{echo '';}?> bcv">Номер телефона</p>
                <input type="number" class="input2 asd" name="number_phone"<?if(strlen($error_number)>1){echo'error_input';}else{echo '';}?>  value="<?if(isset($_POST['sign_up'])){echo $_POST['number_phone'];}?>">
                <p class="error_txt"><?=$error_number?></p>
            </label>
            <label class="">
                <p class="form_txt2  <?if(strlen($error_email)>1){echo'error_inp_txt';}else{echo '';}?> bcv">Электронная почта</p> 
                <input type="text" class="input2 asd" name="email" <?if(strlen($error_email)>1){echo'error_input';}else{echo '';}?> value="<?if(isset($_POST['sign_up'])){echo $_POST['email'];}?>">
                <p class="error_txt"><?=$error_email?></p>
            </label>
            <label class="">
                <p class="form_txt2  <?if(strlen($error_pass)>1){echo'error_inp_txt';}else{echo '';}?> bcv">Пароль</p>
                <input type="password" class="input2 asd" name="pass"<?if(strlen($error_pass)>1){echo'error_input';}else{echo '';}?> value="<?if(isset($_POST['sign_up'])){echo $_POST['pass'];}?>">
                <p class="error_txt"><?=$error_pass?></p>
                <p class="error_txt"><?=$error_passwords?></p>
            </label>
            <label class="">
                <p class="form_txt2 <?if(strlen($error_pass)>1){echo'error_inp_txt';}else{echo '';}?> bcv">Повтор пароля</p>
                <input type="password" class="input2 asd" name="repass" <?if(strlen($error_pass)>1){echo'error_input';}else{echo '';}?> value="<?if(isset($_POST['sign_up'])){echo $_POST['repass'];}?>">
                <p class="error_txt"><?=$error_pass?></p>
                <p class="error_txt"><?=$error_passwords?></p>

            </label>
            <div>
                <input type="checkbox" class="custom_checkbox" id="happy" name="happy" value="yes">
                <label for="happy"><p class="label_check_txt">Я принимаю условия пользователя</p></label>
            </div>
            
        </div>
        <input type="submit" name="sign_up" value="Зарегестрироваться" class="btn_one sign_in_btn">
    </div>
        </form>
    </section>
 
    <section class="header_and_ban">
    <header class="header scroll_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <div class="banner_content">
                <div class="banner_txt_wrap">
                    <p class="banner_txt main_banner_text">
                        <span class="underline">Bus.mar</span> - <span class="yellow_back_txt">лучшие идеи</span> для продвижения вашего <span class="pink_back_txt">бизнеса!</span>
                    </p>
                </div>
                <div class="banner_items">
                    <a href="#zayavka" class="btn_ones banner_btn">Закажите звонок</a>
                    
                    <div class="banner_decor">
                        <img src="assets/img/banner/guestion_banner.svg" alt="задать вопрос" class="question">
                        <img src="assets/img/banner/banner_png.png" alt="задать вопрос" class="speaker_png">
                    </div>
                </div>
                <div class="steps_list banner_list">
                    <ol class="steps_list_content">
                        <li class="step banner_step">
                            <h4>Обеспечим быстрый рост вашей компании</h4>
                        </li>
                        <li class="step banner_step pink_number">
                            <h4>Составим анализ и предложим варианты подходящие именно вам</h4>
                        </li>
                        <li class="step banner_step">
                            <h4>Начать продвигать можете прямо сейчас, просто отставьте заявку</h4>
                        </li>
                    </ol>
                </div>

            </div>
        </div>
    </section>
</section>
<section class="block" id="about_us">
    <div class="container">
            <p class="title" style="margin-bottom:60px;">Почему следует выбирать нашу компанию?</p>
            <div class="about_us">
                <div class="about_us_txt"><h2>Вы не тратите деньги на то что вам нужно мы сами подберем для вас подходящий вариант </h2></div>
                <div class="txt_color_block">
                    <h2>Мы сами найдем бюджетные для вас предложения, проведем анализ вашей компании и выявим с чего вам следует начать</h2>
                    <img src="assets/img/about_us/block_one.png" alt="картинка" class="image_svg_why">
                </div>
            </div>
            <div class="about_us_mobile">
                <div class="about_us_mobile_content">
                    <div class="about_us_stroke">
                        <img src="./assets/img/about_us/image 1.png" alt="">
                        <p class="text_about_us_mobile">
                            Вы не тратите деньги на то что вам нужно мы сами подберем для вас подходящий вариант 
                        </p>
                    </div>
                    <div class="about_us_stroke">
                        <p class="text_about_us_mobile yellow_mobile_about_us">
                            Вы не тратите деньги на то что вам нужно мы сами подберем для вас подходящий вариант 
                        </p>
                        <img src="./assets/img/about_us/pngegg (2) 1.png" alt="">
                    </div>
                </div>
            </div>
    </div>
</section>
<section class="block steps_back_photo">
    <div class="container">
        <div class="steps_content">
            <div class="step_content_top">
                <div class="title_steps_block">
                    <h3>Рекламу может создать каждый с BUS.MAR</h3>
                    <img src="assets/img/banner/bus.svg" alt="логотип" width="113px" class="logo_steps">
                </div>
                <div class="description_block_txt">
                    <h4>Вы не должны переживать по поводу того, что ваша собственная обложка рекламы будет не продающей, всё что вам нужно сделать это:</h4>
                </div>
            </div>
            <div class="steps_list">
                <ol class="steps_list_content">
                    <li class="step">
                        <h4>Создать свой <a href="" class="step_profile_link">Личный кабинет</a></h4>
                    </li>
                    <li class="step pink_number">
                        <h4>Выбрать тип вашей рекламы, название компании, и размер бюджета </h4>
                    </li>
                    <li class="step">
                        <h4>Заполнить необходимую форму и мы вам предложим подходящие варианты</h4>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="block" id="examples">
    <p class="title center_title">Примеры наших работ</p>
    <div class="slider_container">
    <div class="slider">

        <div class="slider_cart">
            <img src="assets/img/examples/examples5.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Контекстная реклама</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples1.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Отрисовка любой рекламы</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples6.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Рекламный баннер для компании “velo”</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples2.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Видеореклама еды</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples7.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Сео услуги для сайтов любового вида</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples8.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Таргетированная реклама</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples1.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Отрисовка любой рекламы</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples6.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Рекламный баннер для компании “velo”</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples2.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Видеореклама еды</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples7.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Сео услуги для сайтов любового вида</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples8.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Таргетированная реклама</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Рекламный баннер для компании “velo”</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples2.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Рекламный баннер для компании “velo”</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="slider_cart">
            <img src="assets/img/examples/examples.jpg" alt="картинка карточки"  class="cart_img">
            <div class="cart_info">
                <h3><b>Рекламный баннер для компании “velo”</b></h3>
                <ul class="cart_list">
                    <li class="cart_item">
                        <p class="small_txt">Увеличение продаж на 20%</p>
                    </li>
                    <li class="cart_item">
                        <p class="small_txt">Увеличение посещаемости сайтов на 50%</p>
                    </li>
                </ul>
                
            </div>
        </div>
        
    </div>
    <div class="arrows_slider">
        <button class="btn_slider" onclick = "prev()" id="prev_btn">&lt;</button>
        <button class="btn_slider" onclick="next()" id="next_btn">&gt;</button>

    </div>
</section>
<section class="block answer_background" id="questions">
    <div class="container">
        <div class="answer_block_top">
        <p class="title">
            <span class="white">
                Ответы на<br>популярные вопросы
            </span>
        </p>
        <img src="assets/img/answers/question.svg" alt="вопрос" class="question_img">
    </div>
        <div class="accordion">
            <div class="acc_block">
            <div class="question_block"><div>Какая гарантия того что мою рекламу будут видеть?</div><button class="open_close_acc">+</button></div>
            <div class="answer_block">
                    <h4>
                        Наш сайт не заботить о каждом клиенте, и после подключения услуг, мы всегдда будеи на свяхи, и будем курирровать о том как ваша реклама работает, и сколько людей прибавила к вашей целевой аудитории
                    </h4>
            </div>
        </div>
        <div class="acc_block">
            <div class="question_block"><div>Что если у меня маленький бюджет и компания слишком молода?</div><button class="open_close_acc">+</button></div>
            <div class="answer_block">
                    <h4>
                        Мы будем очень рады, если к нас присоединяюсься владельцы молодых компаний и сможем из продвинуть. Бюджет услуг очень разнообразен
                    </h4>
            </div>
        </div>
        <div class="acc_block">
            <div class="question_block"><div>Если мне не понрявяться ваши услуги могу ли я вернуть деньги?</div><button class="open_close_acc">+</button></div>
            <div class="answer_block">
                    <h4>
                        Если наша компания виновата в не качествнном оказании услуг возвращается полная сумма, иначе частичный возврат
                    </h4>
            </div>
        </div>
        </div>
    </div>
</div>
</section>
<section class="block" id="zayavka">
    <div class="container">
        <p class="title center_title">Закажите бесплатную консультацию</p>
        <div class="zayavka_content">
            <form class="zayavka_form" name="zayavka" method="POST">
                <label class="">
                    <p class="form_txt2">Имя</p>
                    <input type="text" class="input2" name="name" value="<?if(isset($_SESSION['uid'])){echo $usersee['name'];}?>">
                </label>
                <label class="">
                    <p class="form_txt2">Номер телефона</p>
                    <input type="tel" class="input2" name="number_phone" value="<?if(isset($_SESSION['uid'])){echo $usersee['number'];}?>">
                </label>
                <br class="emae">
                <div>
                    <input type="checkbox" class="custom_checkbox" id="happy1" name="happy" value="yes">
                    <label for="happy1"><p class="label_check_txt">Я принимаю условия пользователя<p></label>
                </div>
                <input type="submit" class="btn_one sub_zayavk" value="Заказать звонок" name="zayavka">
            </form>
        </div>
    </div>
</section>
<script src="assets/js/slider.js"></script>
