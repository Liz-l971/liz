<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="list_task">
    <div class="block">
        <h1 class="h1">Задание 1</h1>
        <?php
        $students = ['Иванов', 'Cмирнов', 'Сидоров', 'Антонова', 'Половняк'];

        ?>

        <?php
        // Вывод списка студентов на экран
        ?>
        <div class="list_stud">
            <?foreach($students as $stud){
                echo '<div>'.$stud.'</div>';
            }
            ?>
        </div>
        <?php
        $count = count($students);
        ?>
        <div class="list_info">
            <?echo '<p>Количество студентов:'.$count;

            if (in_array('Сидоров', $students)) {
                echo '<p>Фамилия "Сидоров" есть в списке.</p>';
            } else {
                echo '<p>Фамилия "Сидоров" отсутствует в списке.</p>';
            }
            $expelled = array_pop($students);
            echo '<p>Удаленная фамилия: <span>' . $expelled.'<span></p>';
        ?>
        </div>
        </div>
        <div class="block">
    <h1>Задание 2</h1>
        <?php
        $circleStudents = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванов",
            "Экономический" => "Петров",
            "Вокальный" => "Антонова"
        ];
        asort($circleStudents);?>
        <div class="list_stud">
            <?foreach ($circleStudents as $circle => $student) {
    echo'<div class="circle_stud">'. $circle . " - " . $student . '</div>'            ;
            }
            ?>
        </div>
        </div>
        <div class="block">
<h1>Задание 3</h1>

    <?php
        $array3 = [
            'Фамилия' => 'Иванова',
            'Имя' => 'Елизавета',
            'группа' => '425 ВЕБ',
            'хобби' => 'Музыка',
            'network' => '@liz_iii',
        ];?>
        <div class="list_stud">
        <?foreach ($array3 as $key => $value) {
            echo'<div class="circle_stud">'. $key . ": " . $value . '</div>';
        }
    ?>
    </div>
    </div>
    </div>
</body>
</html>