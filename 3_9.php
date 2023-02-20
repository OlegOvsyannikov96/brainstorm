<?php
/**
 * В массив А(N,М) после первого отрицательного элемента каждого столбца 
 * вставить число, равное минимальному элементу этого столбца. 
 * Если столбец не содержит отрицательных элементов, то вставить это число 
 * перед первым элементом столбца
 */
function show ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {
    
            echo $arr[$i][$j] . ' ';
        }
        echo '</br>';
    }
    echo '</br>';
}
function geIndexMinModElement ($arr)
{
    $index = 0;
    $min = ($arr[0] < 0) ? $arr[0] * -1 : $arr[0];
    for ($i = 0; $i < count($arr); $i++) {

        $temp = ($arr[$i] < 0) ? $arr[$i] * -1 : $arr[$i];

        if ($temp < $min) {

            $min = $temp;
            $index = $i;
        }
    }

    return $index;
}

function getIndexFirstNegativeElement ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] < 0) return $i;
    }

    return -1;
}
function getMagicArr ($arr)
{
    $negative = getIndexFirstNegativeElement($arr);
    $min = geIndexMinModElement($arr);

    if ($negative === -1) return array_merge([$arr[$min]] , $arr);

    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        $res[] = $arr[$i];
        if ($i === $negative) $res[] = $arr[$min];
    }

    return $res;
}
 
$arr = [
    [1, 4, 5, 2, -6, 4, 9],
    [2, 5, -1, 4, 6, -8, 0],
    [6, 2, 2, 4, 0, 8, 3],
];

show($arr);

for ($i = 0; $i < count($arr); $i++) {

    $arr[$i] = getMagicArr($arr[$i]);
}

show($arr);