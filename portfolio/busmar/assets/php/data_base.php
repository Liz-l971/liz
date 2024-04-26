<?php
    try{
        //  $conn = new PDO('mysql:host=localhost;dbname=curs_2;charset=utf8','root','');
        $conn = new PDO('mysql:host=localhost;dbname=z595;charset=utf8','z595','fA4A33nSw8nAz3nS');
     
    }catch(PDOException $e){
        die('Ошибка подключения к бд' .$e -> getMessage());
    }
    return $conn;
?>