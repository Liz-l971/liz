<?php
include('assets/php/data_base.php');
if(isset($_GET['id_new'])){
    $state = $conn->prepare("UPDATE `news` SET `status`='0' WHERE `id` = '{$_GET['id_new']}'");
    $state->execute();
    header('Location: /learn/busmar/?p=proposed_articles_list');
}
?>