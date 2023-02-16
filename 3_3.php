<?php
/**
 * В массиве А(N,М) найти максимальный и минимальный элементы среди всех элементов 
 * тех строк, которые упорядочены по возрастанию или по убыванию.
 */
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

function isInc ($arr): bool
{
    for ($i = 0; $i < count($arr) - 1; $i++) {

        if ($arr[$i] > $arr[$i + 1]) return false;
    }

    return true;
}
function isDec ($arr): bool
{
    for ($i = 0; $i < count($arr) - 1; $i++) {

        if ($arr[$i] < $arr[$i + 1]) return false;
    }

    return true;
}

$arr = [
    [-2, -1, 3, 9],
    [5, 6, 7, -8, 0],
    [9, 0, 8, -7, 3, 5],
    [6, 3, 4, -1],
    [-1, -3],
];

$controlSum = 0;

$min = getControlSum($arr);
$max = getControlSum($arr) * -1;
for ($i = 0; $i < count($arr); $i++) {

    if (isInc($arr[$i]) || isDec($arr[$i])) {

        for ($j = 0; $j < count($arr[$i]); $j++) {
            
            if ($min > $arr[$i][$j]) $min = $arr[$i][$j];
            if ($max < $arr[$i][$j]) $max = $arr[$i][$j];
        }
    }
}

echo 'min: ' . $min . ' | max: ' . $max;