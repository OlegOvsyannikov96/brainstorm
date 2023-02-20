<?php
/**
 * В массиве А(N,М) строку с максимальным количеством знакочередующихся элементов
 * переставить на первое место
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
function getTotalRotation ($arr) 
{
    $total = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {

        if ($arr[$i] > 0 && $arr[$i + 1] < 0) $total++;
        if ($arr[$i] < 0 && $arr[$i + 1] > 0) $total++;
    }

    return $total;
}
function getIndexMaxTotalRotation ($arr)
{
    $index = 0;
    $maxTotal = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {

        $total = getTotalRotation($arr[$i]);
        if ($total > $maxTotal) {
            $maxTotal = $total;
            $index = $i;
        }
    }

    return $index;
}
function moveToStart (&$arr, $index)
{
    if ($index) {

        $res[] = $arr[$index];
        for ($i = 0; $i < count($arr); $i++) {

            if ($i === $index) continue;
            $res[] = $arr[$i];
        }

        $arr = $res;
    }
}

$arr = [
    [1, 4, -5, 2, 6, -4, 9],
    [2, 5, 1, -4, -1, -8, 3],
    [1, -5, 3, -7, 9, -2, 1],
    [6, 2, 2, 1, 1, 8, 3],
];

show($arr);

$index = getIndexMaxTotalRotation($arr);
moveToStart($arr, $index);

show($arr);

