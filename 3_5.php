<?php
/**
 * В массиве А(N,М) найти сумму элементов тех столбцов, 
 * все элементы которых кратны заданному числу р .
 */
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
function sumOfMultiples ($arr, $number)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] % $number) return 0;
        $sum += $arr[$i];
    }

    return $sum;
}

$arr = [
    [1, 2, 3, 4, 0],
    [5, 6, 7, 8, 3],
    [9, 4, 8, 2, 6],
    [6, 4, 4, 6, 9],
];

$arr = transpose($arr);
$sum = 0;
$number = 2;
for ($i = 0; $i < count($arr); $i++) {

    $sumOfMul = sumOfMultiples($arr[$i], $number);
    if ($sumOfMul) $sum += $sumOfMul;
}

echo $sum;