<?php
/**
 * В матрице А(N,N) найти первую строку, не содержащую отрицательных элементов, 
 * и умножить ее как вектор на матрицу А.
 */
function isNegativeElement ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] < 0) return true;
    }

    return false;
}
function getFirstPositiveLine ($arr)
{
    $line = -1;
    for ($i = 0; $i < count($arr); $i++) {
    
        if (!isNegativeElement($arr[$i])) {

            $line = $arr[$i];
            break;
        }
    }

    return $line;
}
function arrMulVector ($arr, $vector)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        $sum = 0;
        for ($j = 0; $j < count($arr[$i]); $j++) {

            $sum += ($arr[$i][$j] * $vector[$j]);
        }

        $res[] = $sum;
    }

    return $res;
}

$arr = [
    [1, 2, -3, 4, 0],
    [5, 6, 7, 8, 3],
    [9, -4, 8, 2, 6],
    [6, 4, 4, 6, 9],
    [0, 2, 5, 1, 8],
];

$vector = getFirstPositiveLine($arr);
print_r(arrMulVector($arr, $vector));