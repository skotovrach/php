<?php

function show_something()
{
    return 'SOMETHING';
}

function task1(array $array, bool $fork = false)
{
    echo '<br>';
    if ($fork === true) {
        foreach ($array as $key => $value) {
            echo '<p>' . $value . '</p>';
        }
    } else {
        $result = null;
        foreach ($array as $value) {
            $result .= $value;
        }
        return $result;
    }
}


function task2_calc_everything()
{
    $arr = func_get_args();
    $condition= $arr[0] == '*' || $arr[0] == '+' || $arr[0] =='/';
    if ($condition) {
        switch ($arr[0]) {
            case '*':
                $result = 1;
                for ($i = 1; $i < func_num_args(); $i++) {
                    $result *= $arr[$i];
                }
                break;
            case '/':
                $result = 1;
                for ($i = 1; $i < func_num_args(); $i++) {
                    $result /= $arr[$i];
                }
                break;
            case '+':
                $result = 0;
                for ($i = 1; $i < func_num_args(); $i++) {
                    $result += $arr[$i];
                }
                break;
        }
    } else {
        $result = "Неизвестный оператор";
    }
    return $result;
}


function task3_create_table($arg1, $arg2)
{
    $check = is_int($arg1) && is_int($arg2);
    if ($check) {
        function createArray(int $arg)
        {
            $list = [];
            for ($i = 1; $i <= $arg; $i++) {
                $list[$i] .= $i;
            };
            return $list;
        }

        $arr1 = createArray($arg1);
        $arr2 = createArray($arg2);

        echo "<table style = 'text-align: center;'>";
        $start_index = 1;
        while ($start_index <= $arg2) {
            echo "<tr>";
            foreach ($arr1 as $key => $value) {
                $result = $value * $arr2[$start_index];
                echo "<td>$result</td> ";
            }
            $start_index +=1;
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Функция работает только с целыми числами.";
    }
}


function task4_open_it($arg) {
    echo file_get_contents($arg);
}
