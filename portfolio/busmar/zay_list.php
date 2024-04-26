    <?php
    $zayavki = $conn->query("SELECT * FROM `zayavka` WHERE `status` = 0")->fetchAll(2);
    if(isset($_GET['add_zay'])){
        $state = $conn->prepare("UPDATE `zayavka` SET `status`='1' WHERE `id` = '{$_GET['add_zay']}'");
        $state->execute();
        header('Location:?p=zay_list');
    }
    ?>
    <header class="header scroll_header scroll_white_header">
        <div class="container">
            <?include('assets/php/header.php');?>
        </div>
    </header>
    <section class="section_users">
        <div class="container">
            <h2 class="name_page">
                Заявки на звонок
            </h2>
            <div class="fio_and_name">
                <p class="bold1">ФИО</p>
                <p class="bold1">Номер</p>
            </div>
            <div class="TYUI">
                <?foreach($zayavki as $item):?>
                <div class="QWERTY">
                    <div class="stroke_users_list">
                        <div class="stroke_users_list_content">
                            <p class="fio_users_list">
                                <?=$item['name']?>
                            </p>
                            <hr>
                            <p class="email_users_list">
                                <?=$item['number_phone']?>
                            </p>
                            <hr>
                            
                            <a href="?p=zay_list&add_zay=<?=$item['id']?>" class="read_stat">Принять</a>

                        </div>
                    </div>
                </div>
                <?endforeach;?>
            </div>
            
        </div>
    </section>