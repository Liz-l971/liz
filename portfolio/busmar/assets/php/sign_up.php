<?php
    // include('functions.php');
        $error_name =' ';
        $error_surname =' ';
        $error_email = ' ';
        $error_number = ' ';
        $error_pass = ' ';
        $error_repass = ' ';
        $error_passwords =' ';
        if(isset($_POST['sign_up'])){
            foreach($_POST as $key => $value){
                $data[$key] = $value;
            }
            $error_name =valid_name($_POST['name']);
            $error_surname =valid_surname($_POST['surname']);
            $error_email =valid_email($_POST['email'],$conn);
            $error_number =valid_number($_POST['number_phone']);
            $error_pass = valid_one_pass($_POST['pass']);
            $error_repass = valid_one_pass($_POST['repass']);
            $error_passwords = valid_passwords($_POST['pass'],$_POST['repass']);
            if(($error_name=='')&&($error_email=='')&&($error_number=='')&&($error_surname=='')&&($error_pass=='')&&($error_repass=='')&&($error_passwords=='')&&(isset($_POST['happy']))){
                $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
                $state = $conn ->prepare("INSERT INTO `user`(`surname`, `name`, `patronymic`, `email`, `password`, `number`, `status`, `img`)
                VALUES ('{$data['surname']}','{$data['name']}','{$data['patronymic']}','{$data['email']}','$password','{$data['number_phone']}','1','assets/img/profile/avatar/avatar.svg')");
                $state ->execute();
                header('Location:?');
            }
        }
?>