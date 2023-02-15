<?php
/**
 * Дан массив А(N).
 * Получить массив В(N), i-элемент которого 
 * равен среднему арифметическому первых i элементов массива А.
 */

function avg ($arrA)
{
    $arrB = [];
    $avg = 0;
    for ($i = 0; $i < count($arrA); $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            $avg += $arrB[$j];
        }
    
        $arrB[] = round($avg / ($i + 1), 2);
        $avg = 0;
    }

    return $arrB;
}
