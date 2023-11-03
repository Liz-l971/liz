<?php
    class Animal{
        public $weight,$age,$color;
        function hello(){
            echo "my age - $this->age,my color - $this->color";
        }
    }
    $lion = new Lion();
    $lion->age="12";
    $lion->color = "yellow";
    $lion->name_lion = "Lion";
    class Lion extends Animal{
        public $name_lion;
        function hello_lion(){
            echo "My name: $this->name_lion<br>My age: $this->age<br>My color: $this->color";
        }
    }
    $rabbit = new Rabbit();
    $rabbit->age="5";
    $rabbit->color = "whyte";
    $rabbit->name_rabi = "Rabbit";
    class Rabbit extends Animal{
        public $name_rabi;
        function hello_rabbit(){
            echo "My name: $this->name_rabi<br>My age: $this->age<br>my color: $this->color";
        }
    }
    $wolf = new Wolf();
    $wolf->age="7";
    $wolf->color = "grey";
    $wolf->name_wolf = "Wolf";
    class Wolf extends Animal{
        public $name_wolf;
        function hello_wolf(){
            echo "My name: $this->name_wolf<br>My age: $this->age<br>My color: $this->color";
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
    <div class="container">
        <div class="about_animal_block">
            <img src="https://otkrit-ka.ru/uploads/posts/2021-11/krasivye-foto-kartinki-zajchiki-2.jpg" alt="" class="avatar" width="250px">   
            <h3><?php $rabbit->hello_rabbit();?></h3>
        </div>
        <div class="about_animal_block">
            <h3><?php $lion->hello_lion();?></h3>
            <img src="https://klike.net/uploads/posts/2023-01/1672986570_7-7.jpg" alt="" class="avatar" width="250px">   
        </div>
        <div class="about_animal_block">
            <img src="https://cdn1.flamp.ru/2f2e47da1b29d1cf2d42bbb05893ad68.jpg" alt="" class="avatar" width="250px">   
            <h3><?php $wolf->hello_wolf();?></h3>
        </div>
    </div>
</body>
</html>