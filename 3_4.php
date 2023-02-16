<?php
/**
 * В массиве А(N,М) найти сумму тех элементов, в записи которых используются только 
 * цифры 0, 1, 3, 8.
 */
function inArr ($arr, $number): bool
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($number === $arr[$i]) return true;
    }

    return false;
}
function isMagicNumber ($number, ...$magicDigits): bool
{
    $number = $number > 0 ? $number : $number * -1;

    while ($number > 1) {
        $digit = $number % 10;
        $number = (int) $number / 10;
        if (!inArr($magicDigits, $digit)) return false;
    }

    return true;
}

$arr = [
    [-2, -1, 3, 90],
    [51, 63, 18, -8, 0],
    [9, 10, 8, -7, 32, 55],
    [6, 38, 34, -1],
    [-1, -3],
];

$sum = 0;
for ($i = 0; $i < count($arr); $i++) {

    for ($j = 0; $j < count($arr[$i]); $j++) {

        if (isMagicNumber($arr[$i][$j], 0, 1, 3, 8)) {
            
            $sum += $arr[$i][$j];
        }
    }
}

echo $sum;