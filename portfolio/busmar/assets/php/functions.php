<?php
// include('data_base.php');
function valid_name($value){
    if($value==''){
        $error = 'Введите имя';
    }
    else if(strlen($value)<2){
        $error = 'Введите не менее 2х символов';
    }
    else{
        $error = '';
    }
    return($error);
}
function valid_surname($value){
    if($value==''){
        $error = 'Введите фамилию';
    }
    else{
    $error = '';
    }
    return($error);
}
function valid_email($value,$conn){
    $email = $conn->query("SELECT * FROM `user` WHERE `email` = '$value'")->fetch(2);
    if($value==''){
        $error = 'Введите почту';
    }
    else if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
        $error = 'Неверный формат почты';
    }else if(!empty($email))
    {
        $error = 'Такая почта уже есть!';
    }
    else{
    $error = '';
}
return($error);
}
function valid_number($value){
if($value==''){
    $error = 'Введите номер телефона';
}
else if(strlen($value)!=11){
    $error = 'Введите 11 цифр';
}
else{
    $error = '';
}
return($error);
}
function valid_passwords($pass,$repas){
    if($pass!=$repas){
        $error = 'Пароли не совпадают';
    }else{
        $error = '';
    }
    return($error);
}
function valid_one_pass($value){
    if($value==''){
        $error = 'Введите пароль';
    }
    else if((strlen($value))<6){
        $error = 'Введите не менее 6 символов';
    }
    else{
    $error = '';
}
return($error);
}
function formatDate($date, $format = "d.m.Y H:i"){
    return date($format, strtotime($date));
}
?>