<?php
    function valid_name($value){
            if($value==''){
                $error = 'Введите имя';
            }
            else if(strlen($value)<2){
                $error = 'Поле имя должно иметь больше 2-х символов';
            }
            else{
            $error = '';
            }
        return($error);
    }
    function valid_email($value){
        if($value==''){
            $error = 'Введите почту';
        }
        else if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
            $error = 'Неверный формат почты';
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
?>