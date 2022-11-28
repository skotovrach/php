<?php

require '../functions.php';


echo "<h2>задание #2.1</h2>";

$list = ['Хорошо', 'живёт', 'на', 'свете', 'Винни-Пух'];

echo task1($list, true);
echo task1($list, false);

echo "<h2>задание #2.2</h2>";

echo task2_calc_everything('+', 15,5, 5);

echo "<h2>задание #2.3</h2>";

echo task3_create_table(10, 8);

echo "<h2>задание #2.4</h2>";

date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i') . "<br>";
echo strtotime('24.02.2016 00:00:00' );

echo "<h2>задание #2.5</h2>";

$string = "Карл у Клары украл Кораллы";
$result = str_replace('К', '', $string);
echo $result;

$string = "Две бутылки лимонада";
$result = str_replace('Две', 'Три', $string);
echo "<br>" . $result;

echo "<h2>задание #2.6</h2>";

file_put_contents('test.txt', 'Hello again!');
task4_open_it('test.txt');