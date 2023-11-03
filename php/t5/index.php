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
         class Cookie
         {
       
           private $type;
           public $setType = ['шоколадное','Детское','Овсяное','Крекер',];
           public function setType($value) {
             if(in_array($value, $this->setType)){
               $this->type = $value;
             }
           }
       
           public function getType() {
             if(!empty($this->type)) {
                 return 'Вид печенья: ' . $this->type;
             } else {
                 return 'Такого вида нет';
             }
         }
       
         }
         $coockie1 = new Cookie();
         $coockie1->setType('Хрустящее');
         $coockie2 = new Cookie();
         $coockie2->setType('Детское');
         $coockie3 = new Cookie();
         $coockie3->setType('Соленное');
 ?>
 <div class="container">
    <div class="block_info">
         <h3><?=$coockie1->getType();?></h3>
    </div>
    <div class="block_info">
         <h3><?=$coockie2->getType();?></h3>
    </div>
    <div class="block_info">
         <h3><?=$coockie3->getType();?></h3>
    </div>
 </div>

</body>
</html>