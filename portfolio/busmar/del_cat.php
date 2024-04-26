<?php
 include('assets/php/data_base.php');
 if(isset($_GET['del_cat'])){
    $state = $conn->prepare("DELETE FROM `category_news` WHERE `id` = '{$_GET['del_cat']}'");
    $state->execute();
    header('Location:/learn/busmar/?p=category_list');
 }
?>