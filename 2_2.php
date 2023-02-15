<?php
/**
 * Дан массив А(N).
 * Получить массив В(N), i-элемент которого 
 * равен среднему арифметическому первых i элементов массива А.
 */

function avg ($arr_a)
{
    $arr_b = [];
    $avg = 0;
    for ($i = 0; $i < count($arr_a); $i++) {
        for ($j = 0; $j < $i + 1; $j++) {
            $avg += $arr_b[$j];
        }
    
        $arr_b[] = round($avg / ($i + 1), 2);
        $avg = 0;
    }

    return $arr_b;
}
