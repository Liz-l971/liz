<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
		
<!DOCTYPE html>
<html lang="ru">

<head>
       <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
 
    <script defer="defer" src="<?=SITE_TEMPLATE_PATH?>/assets/js/bundle.js"></script>
    <link href="<?=SITE_TEMPLATE_PATH?>/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <?
 $APPLICATION->ShowPanel();
    ?>
    <header>
        <div class="wrapper">
            <div class="header"><img class="header__logo" src="<?=SITE_TEMPLATE_PATH?>/assets/img/Logo.svg">
                <div class="header__menu">
                    <nav>
                        <ul class="header__nav">
                     
                         <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
                        </ul>
                    </nav><button class="button_white button_open-modal">Связаться с нами</button>
                </div>
                <div class="burger burger_main"></div>
            </div>
        </div>
    </header>
	
						