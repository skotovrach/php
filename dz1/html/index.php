<?php

echo '<h3>Задание #1</h3>';
$name = 'Виктор';
$age = '43';
echo "Меня зовут: $name" . '<br>';
echo "Мне $age года" . '<br>';
echo "\"!|/\'\"\\";

echo '<h3>Задание #2</h3>';

const BULK_PICTURE = 80;
const FELT_PEN_PICTURE = 23;
const PENCIL_PICTURE = 40;
$paint_picture = null;


echo "<p>";
echo "На школьной выставке " . BULK_PICTURE . " рисунков. " . FELT_PEN_PICTURE . " из них выполнены фломастерами, "
. PENCIL_PICTURE . " карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?"
;
echo "</p>";
$paint_picture = BULK_PICTURE - (FELT_PEN_PICTURE + PENCIL_PICTURE);

echo "<p>";
echo "Их $paint_picture.";
echo "</p>";

echo '<h3>Задание #3</h3>';

$age = mt_rand(-10, 100);
if ($age >= 18 && $age <= 65) {
    print('Вам еще работать и работать');
} elseif ($age > 65) {
        print('Вам пора на пенсию');
} elseif ($age >= 1 && $age <= 17) {
        print('Вам ещё рано работать');
} else {
        print('Неизвестный возраст');
};

echo '<h3>Задание #4</h3>';

$day = random_int(1, 8);

$showDay = function($day) {
    echo "$day" . "-й день недели? ";
};
$showDay($day);
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        print('Это рабочий день');
        break;
    case 6:
    case 7:
        print('Это выходной день');
        break;
    default:
        print('Неизвестный день');
};

echo '<h3>Задание #5.</h3>';

$bmw = array(
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => '2015'
    );

$toyota = array();
$opel = array();

$toyota = array(
    'model' => 'Toyota GR Supra',
    'speed' => 155,
    'doors' => 2,
    'year' => '2022'
);

$opel = array(
    'model' => 'Zafira Life',
    'speed' => 183,
    'doors' => 4,
    'year' => '2022'
);

$cars = array (
    'bmw' => $bmw,
    'toyota' => $toyota,
    'opel' => $opel
);

foreach ($cars as $key => $value) {
    echo "CAR " . $key . '<br>';
    foreach ($value as $keyInner => $valueInner) {
        echo $valueInner . ' ';
    }
    echo '<br>';
    echo '<br>';
}

echo '<h3>Задание #6</h3>';
echo "<table style='text-align: center'>";
//$row = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$row = $column = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i< 10; $i++) {
    $numberRow = $row[$i];
    echo "<tr>";
    for ($key = 0; $key< 10; $key++) {
        $numberColumn = $column[$key];
        $number = $numberRow * $numberColumn;
        if ($numberRow % 2 == 0 && $numberColumn % 2 == 0) {
            echo "<td>" . '(' . $number . ')' . "</td>";
        } elseif ($numberRow % 2 != 0 && $numberColumn % 2 != 0) {
            echo "<td>" . '[' . $number . ']' . "</td>";
        } else {
            echo "<td>" . $number . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
