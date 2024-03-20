<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
     <nav>
        <ul class="header__nav">
<!-- <li class="header__nav-item"><a class="link" href="#news">Новости</a></li> -->
<?
foreach($arResult as $arItem):
    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
        continue;
?>
    <?if($arItem["SELECTED"]):?>
        <li class="header__nav-item"><a href="<?=$arItem["LINK"]?>" class="currentPageLink"><?=$arItem["TEXT"]?></a></li>
    <?else:?>
        <li class="header__nav-item"><a href="<?=$arItem["LINK"]?>" class="link" ><?=$arItem["TEXT"]?></a></li>
    <?endif?>
    
<?endforeach?>
</ul>
</nav>
<?endif?>