
    <?php
    $services = $conn->query("SELECT * FROM `services`")->fetchAll(2);
    ?>
    <section class="header_and_ban">
        <header class="header scroll_header">
            <div class="container">
                <?include('assets/php/header.php');?>
            </div>
        </header>
        <section class="block">
            <div class="container">
                <div class="services_content">
                    <p class="title"><span class="white">Услуги</span></p>
                    <div class="services_list">
                        <?foreach($services as $item):?>
                        <div class="service_cart">
                            <img src="assets/img/services/cart_one.png" alt="" class="service_cart_back">
                            <div class="service_cart_content">
                                <div class="servise_title">
                                    <h3><?=$item['name']?></h3>
                                </div>
                                <p class="service_description">
                                    <?=$item['short_desk']?>
                                </p>
                                <div class="logo_btn">
                                    <p class="logo_txt dark">BUS.MAR</p>
                                    <a href="?p=service_page&id=<?=$item['id']?>" class="btn_two">От <?=$item['cost']?> руб</a>
                                </div>
                            </div>
                        </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>
</html>