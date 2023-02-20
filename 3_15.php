<?php
/**
 * В массиве А(N,М) столбец с минимальным количеством нечетных 
 * элементов переставить на последнее место.
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
function getTotalEvenElements ($arr)
{
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($arr[$i][$j] % 2) $total++;
        }
    }

    return $total;
}
function getTotalMinEvenElements ($arr)
{
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] % 2) $total++;
    }

    return $total;
}
function swap($arr, $index) 
{
    if ($index === -1) return $arr;

    $res = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === $index) continue;

        $res[] = $arr[$i];
    }

    $res[] = $arr[$index];
    
    return $res;
}

$arr = [
    [1, 4, -5, 2, 2],
    [2, 6, 1, -4, 7],
    [6, 2, 2, 1, 9],
    [1, -5, 3, -7, 6],
];

show($arr);
$arr = transpose($arr);

$index = -1;
$min = getTotalEvenElements($arr);
for ($i = 0; $i < count($arr); $i++) {

    $total = getTotalMinEvenElements($arr[$i]);
    if ($min > $total) {
        $min = $total;
        $index = $i;
    }
}

$arr = swap($arr, $index);
$arr = transpose($arr);

show($arr);