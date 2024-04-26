    <?php
    $order = $conn->query("SELECT * FROM `order` WHERE `status` ='1'")->fetchAll(2);

    ?>
     <section <?if((isset($_GET['modal_see_order']))&&($_GET['p']=='order_list')){ echo 'style = "display: flex;"';}?> class="modal">
     <?$order_see = $conn->query("SELECT * FROM `order` WHERE `id` = '{$_GET['modal_see_order']}'")->fetch(2);
        $user_see = $conn->query("SELECT * FROM `user` WHERE `id` = '{$order_see['id_user']}'")->fetch(2);
        $company_see = $conn->query("SELECT * FROM `company` WHERE `id` = '{$order_see['id_company']}'")->fetch(2);
        $services_see = $conn->query("SELECT * FROM `services` WHERE `id` = '{$order_see['id_service']}'")->fetch(2);?>
        <div class="modal_content2">
            <a href="?p=order_list" class="modal_close_btn2">✕</a>
           <div class="modal_title2">Просмотр заявки
           </div> 
        <div class="sign_up_form2" >
            <label class="add_ser_label">
                <p class="form_txt2">Название компании</p>
                <!-- <input type="text2" class="input2" name="short_desk" value=""> -->
                <div class="input2">
                    <a href="?p=company_profile&id=<?=$company_see['id']?>"><?=$company_see['name']?></a>
                </div>
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Пользователь</p>
                <!-- <input type="text2" class="input2" name="short_desk" value=""> -->
                <div class="input2">
                    <a href="?p=user_profile&id=<?=$user_see['id']?>"><?=$user_see['surname']?> <?=$user_see['name']?></a>
                </div>
            </label>
            <label class="add_ser_label">
                <p class="form_txt2">Комментарий</p>
                <div class="input2 textarea2"><?=$order_see['text']?></div>
            </label>
            <label class="add_ser_label">
            <label class="add_ser_label">
                <p class="form_txt2">Услуга</p>
                <div class="input2">
                    <?=$services_see['name']?>
                </div>
            </label>
            </label>
            <div class="btn_orderds">
            <a href="prinyat.php?id_order=<?=$order_see['id']?>" class="btn_one sign_in_btn">Принять</a>
            <a href="otkl_order.php?id_order=<?=$order_see['id']?>" class="btn_three">Отклонить</a>
            </div>
            
    </div>
        </form>
    </section>
    <header class="header scroll_header scroll_white_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="section_users">
        <div class="container">
            <h2 class="name_page">
                Заявки на услуги
            </h2>
            <div class="fio_and_name">
                <p class="bold1">ФИО</p>
                <p class="bold1">Компания</p>
            </div>
            <div class="TYUI">
                <?foreach($order as $item):?>
                <?$user = $conn->query("SELECT * FROM `user` WHERE `id` = '{$item['id_user']}'")->fetch(2);?>
                <?$company = $conn->query("SELECT * FROM `company` WHERE `id` = '{$item['id_company']}'")->fetch(2);?>
                <div class="QWERTY">
                    <div class="stroke_users_list">
                        <div class="stroke_users_list_content">
                            <p class="fio_users_list">
                                <?=$user['surname']?> <?=$user['name']?> <?=$user['patronymic']?>
                            </p>
                            <hr>
                            <p class="email_users_list">
                                <?=$company['name']?>
                            </p>
                            <hr>
                            <a href="?p=order_list&modal_see_order=<?=$item['id']?>" class="read_stat">Просмотр</a>
                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
            
        </div>
    </section>