<?php
/**
 * В массиве А(N,М) поменять местами столбцы, 
 * содержащие максимальный и минимальный элементы.
 */
function show ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {
    
            echo $arr[$i][$j] . ' ';
        }
        echo '</br>';
    }
} 
function getControlSum ($arr): int
{
    $getConSum = 0;
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($arr[$i][$j] > 0) $getConSum += $arr[$i][$j];
            if ($arr[$i][$j] < 0) $getConSum += $arr[$i][$j] * -1;
        }
    }

    return $getConSum;
}
function transpose ($arr)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($res[$j]) {
                $res[$j][] = $arr[$i][$j]; 
            } else {
                $res[$j] = [$arr[$i][$j]];
            }
        }
    }

    return $res;
}

function swap (&$arrA, &$arrB)
{
    $temp = $arrA;
    $arrA = $arrB;
    $arrB = $temp;
}

$arr = [
    [1, 2, 3, 4, 0],
    [5, 6, 7, 8, 3],
    [9, 4, 8, 2, 6],
    [6, 4, 4, 6, 2],
];

$arr = transpose($arr);
$min = getControlSum($arr);
$max = getControlSum($arr) * -1;
$lineMin = -1;
$lineMax = -1;

for ($i = 0; $i < count($arr); $i++) {

    for ($j = 0; $j < count($arr[$i]); $j++) {

        if ($min > $arr[$i][$j]) {
            $min = $arr[$i][$j];
            $lineMin = $i;
        }
        if ($max < $arr[$i][$j]) {
            $max = $arr[$i][$j];
            $lineMax = $i;
        }
    }
}

swap($arr[$lineMin], $arr[$lineMax]);
$arr = transpose($arr);
show($arr);