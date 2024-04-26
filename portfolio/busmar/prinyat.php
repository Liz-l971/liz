<?php
include('assets/php/data_base.php');
if(isset($_GET['id_order'])){
    $order=$conn->query("SELECT * FROM `order` WHERE `id` = '{$_GET['id_order']}'")->fetch(2);
    $state = $conn->prepare("UPDATE `order` SET `status`='2' WHERE `id` = '{$order['id']}'");
    $state->execute();
    header('Location: /learn/busmar/?p=order_list');
}
?>