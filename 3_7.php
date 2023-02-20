<?php
/**
 * В массиве А(N,N) поменять местами максимальные элементы нижнего и 
 * верхнего треугольников относительно главной диагонали.
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

function getIndexTopMax ($arr)
{
    $indexTopMax = [];
    $max = getControlSum($arr) * -1;
    for ($i = 0; $i < count($arr); $i++) {
    
        for ($j = $i + 1; $j < count($arr[$i]); $j++) {
    
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
                $indexTopMax = [$i, $j];
            }
        }
    }

    return $indexTopMax;
}

function getIndexBottomMax ($arr)
{
    $indexBottomMax = [];
    $max = getControlSum($arr) * -1;
    for ($i = 0; $i < count($arr); $i++) {
    
        for ($j = 0; $j < $i; $j++) {

            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
                $indexBottomMax = [$i, $j];
            }
        }
    }

    return $indexBottomMax;
}

function swap (&$arr, $indexTop, $indexBottom)
{
    $temp = $arr[$indexTop[0]][$indexTop[1]];
    $arr[$indexTop[0]][$indexTop[1]] = $arr[$indexBottom[0]][$indexBottom[1]];
    $arr[$indexBottom[0]][$indexBottom[1]] = $temp;
}

$arr = [
    [1, 3, 5, 7, 9],
    [2, 4, 6, 8, 0],
    [0, 6, 1, 7, 3],
    [8, 4, 5, 0, 2],
    [2, 5, 7, 1, 6],
];

show($arr);

$indexTopMax = getIndexTopMax($arr);
$indexBottomMax = getIndexBottomMax($arr);
swap($arr, $indexTopMax, $indexBottomMax);

show($arr);