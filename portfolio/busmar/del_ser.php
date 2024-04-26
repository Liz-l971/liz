<?php
 include('assets/php/data_base.php');
 if(isset($_GET['del_ser'])){
    $state = $conn->prepare("DELETE FROM `services` WHERE `id` = '{$_GET['del_ser']}'");
    $state->execute();
    header('Location:/learn/busmar/?p=uslugi_list');
 }
?>