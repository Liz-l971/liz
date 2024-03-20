<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><div class="modal">
	<form class="contact-us">
		<div class="burger burger_active burger_contact-us">
		</div>
		<h2 class="contact-us__title">Связаться с нами</h2>
		<p class="message message_contact-us">
		</p>
 <input class="contact-us__input" type="text" placeholder="Имя" required=""> <input class="contact-us__input input_phone" type="tel" placeholder="Телефон" required="">
		<div class="checkbox checkbox_contact-us">
 <input type="checkbox" required=""> <label class="caption">Я согласен (-а) на обработку персональных данных</label>
		</div>
 <button type="submit" class="button__contact-us">Отправить</button>
	</form>
</div>
 <main>
<div class="wrapper">
 <section class="projects slider" id="projects">
	<div class="slider__arrows slider__arrows_projects">
 <img src="/bitrix/templates/empty/assets/img/SliderArrow.svg" class="slider__arrow-previous slider__arrow-previous_projects"> <img src="/bitrix/templates/empty/assets/img/SliderArrow.svg" class="slider__arrow-next slider__arrow-next_projects">
	</div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"newsSlider",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "newsSlider",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "information",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y H:i",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "250",
		"SEF_FOLDER" => "",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"/novosti/#ELEMENT_ID#/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?> </section> <section class="news slider" id="news">
	<h1 class="section-title">Новости</h1>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"news",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "information",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y H:i",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("news"=>"","section"=>"","detail"=>"/novosti/#ELEMENT_ID#/",),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N"
	)
);?>
 </section> <section class="faq" id="faq">
	<h1 class="section-title">FAQ</h1>
	<div class="accordion-list">
		<div class="accordion">
			<div class="accordion__header">
				<h2 class="accordion__title">Какие услуги предоставляет ваша студия?</h2>
 <img src="/bitrix/templates/empty/assets/img/Arrow.svg" class="accordion__arrow">
			</div>
			<div class="accordion__body">
				<p>
					 Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн, отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно совершенствуют свои навыки и следят за новыми трендами в дизайне.
				</p>
			</div>
		</div>
		<div class="accordion">
			<div class="accordion__header">
				<h2 class="accordion__title">Как вы обеспечиваете качество и уникальность дизайна?</h2>
 <img src="/bitrix/templates/empty/assets/img/Arrow.svg" class="accordion__arrow">
			</div>
			<div class="accordion__body">
				<p>
					 Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн, отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно совершенствуют свои навыки и следят за новыми трендами в дизайне.
				</p>
			</div>
		</div>
		<div class="accordion">
			<div class="accordion__header">
				<h2 class="accordion__title">Предоставляете ли вы услуги по созданию контента для сайтов и приложений?</h2>
 <img src="assets/img/Arrow.svg" class="accordion__arrow">
			</div>
			<div class="accordion__body">
				<p>
					 Мы придерживаемся высоких стандартов качества и стремимся создавать уникальный дизайн, отвечающий потребностям и ожиданиям наших клиентов. Наши дизайнеры постоянно совершенствуют свои навыки и следят за новыми трендами в дизайне.
				</p>
			</div>
		</div>
	</div>
 </section>
</div>
<div class="white-background">
	<div class="wrapper">
 <section class="subscribe" id="subscribe">
		<div class="subscribe__description">
			<h1 class="subscribe__title">Подпишись на рассылку</h1>
			<p class="subscribe__subtitle">
				 Отправляем анонсы новых статей, выпусков и трансляций
			</p>
			<p class="message message_subscribe">
			</p>
		</div>
		<form class="subscribe__form">
			<div class="subscribe__input-list">
 <input class="input_email" type="email" placeholder="Электронная почта" required=""> <input class="input_date" type="text" placeholder="Дата (например, 01.01.1990)" required=""> <input class="input_phone" type="tel" placeholder="Телефон" required=""> <input class="input_time" type="text" placeholder="Время (например, 10:00)" required="">
			</div>
			<div class="checkbox checkbox_subscribe">
 <input type="checkbox" required=""> <label class="caption">Я согласен (-а) на обработку персональных данных</label>
			</div>
 <button type="submit" class="button__contact-u s">Отправить</button>
		</form>
 </section>
	</div>
</div>
 </main><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>