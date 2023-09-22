<?php
    include('functions.php');
    $error_name =' ';
    $error_email = ' ';
    $error_number = ' ';
    if(isset($_POST['sub'])){
        $error_name =valid_name($_POST['name']);
        $error_email =valid_email($_POST['email']);
        $error_number =valid_number($_POST['number']);
        if(($error_name=='')&&($error_email=='')&&($error_number=='')){
            header('Location:?');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h2 class="h2">Заполните форму</h2>
        <form  method="POST" class="form" name="sub">
            <div class="label_form_block">
                <h4 class="h4">Введите имя</h4>
                <input type="text" class="input" name="name" value="<?if(isset($_POST['sub'])){echo $_POST['name'];}?>">
                <p class="error"><?=$error_name;?></p>

            </div>
            <div class="label_form_block">
                <h4 class="h4">Введите почту</h4>
                <input type="text" class="input" name="email" value="<?if(isset($_POST['sub'])){echo $_POST['email'];}?>">
                <p class="error"><?=$error_email;?></p>
            </div>
            <div class="label_form_block">
                <h4 class="h4">Введите номер телефона</h4>
                <input type="number" class="input" name="number" value="<?if(isset($_POST['sub'])){echo $_POST['number'];}?>">
                <p class="error"><?=$error_number;?></p>
            </div>
            <input type="submit" name="sub" class="btn_sub">
        </form>
    </div>
</body>
</html>