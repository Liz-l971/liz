<?php
    include("lib/car.php");
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
    <?php
        class Car{
            function construct(){
                echo "это машина";
            }
        }
        $car = new Car();
        $namespacecar = new \lib\Car();
        ?>
        <div class="container">
            <div class="block">
                <h3><? $car ->construct();?></h3>
            </div>
            <div class="block">
                <h3><? $namespacecar -> construct()?></h3>
            </div>
        </div>
</body>
</html>