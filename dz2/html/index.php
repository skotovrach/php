<?php

require 'src/functions.php';


echo "<h2>задание #2.1</h2>";

$list = ['Хорошо', 'живёт', 'на', 'свете', 'Винни-Пух'];

echo task1($list, true);
echo "<br>";
echo task1($list);

echo "<h2>задание #2.2</h2>";

echo task2('+', 15,0, 5, 10);
echo "<br>";

echo task2('/', 10, 1, 10, 10);
echo "<br>";
echo task2('/', 10, 0, 10, 10);
echo "<br>";

echo task2('*', 15,1, 5);
echo "<br>";

echo task2('-', 15,0, 5);
echo "<br>";

echo task2('cowabunga!', 1, 2 , 3);


echo "<h2>задание #2.3</h2>";

echo task3(10, 8);

echo "<h2>задание #2.4</h2>";

date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i') . "<br>";
echo strtotime('24.02.2016 00:00:00' );



echo "<h2>задание #2.5</h2>";

$string = "Карл у Клары украл Кораллы";

task4('К', '', $string);

$string = "Две бутылки лимонада";
task4('Две', 'Три', $string);

echo "<h2>задание #2.6</h2>";

task5('test.txt', 'Hello again!');