<?php

function task1(array $array, bool $fork = false)
{
    $result = null;

    if ($fork === true) {
        $result = implode( "<p>", $array );
    } else {
        $result = implode($array);
    }
    return $result;
}


function task2()
{
    $arr = func_get_args();
    $condition = $arr[0] == '*' || $arr[0] == '+' || $arr[0] =='/' || $arr[0] =='-';
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
                foreach($arr as $key => $value) {
//                    var_export($value);
                    if ($value ===0) {
                        $result = "error";
                        break;
                    }
                }
                if ($result == "error") {
                    $result = "Деление на ноль недопустимо";
                } else {
                    for ($i = 1; $i < func_num_args(); $i++) {
                        $result /= $arr[$i];
                }
            }
                break;
            case '+':
                $result = 0;
                for ($i = 1; $i < func_num_args(); $i++) {
                    $result += $arr[$i];
                }
                break;
            case '-':
                $result = 0;
                for ($i = 1; $i < func_num_args(); $i++) {
                    $result -= $arr[$i];
                }
                break;
        }
    } else {
        $result = "Неизвестный оператор";
    }
    return $result;
}


function task3($arg1, $arg2)
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
        $startIndex = 1;
        while ($startIndex <= $arg2) {
            echo "<tr>";
            foreach ($arr1 as $key => $value) {
                $result = $value * $arr2[$startIndex];
                echo "<td>$result</td> ";
            }
            $startIndex +=1;
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Функция работает только с целыми числами.";
    }
}

function task4($strPart, $strPartNew, $string) {
    $result = str_replace($strPart, $strPartNew, $string);
    echo $result . "<br>";
}



function task5(string $fileName, string $text) {
    file_put_contents($fileName, $text);
    echo file_get_contents($fileName);
}

