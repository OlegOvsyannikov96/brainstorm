<?php
/** 
 * Найти наибольший общий делитель (НОД) двух натуральных чисел N и M, 
 * реализуя алгоритм эвклида.
 */
function findNOD (int $num1, int $num2): int
{
    if ($num1 === $num2) return $num1;

    while ($num1 && $num2) {
        if ($num1 > $num2) {
            $num1 %= $num2;
        } else {
            $num2 %= $num1;
        }
    }

    return $num1 + $num2;
}