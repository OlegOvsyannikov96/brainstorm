<?php
/**
 * В массиве А(N) подсчитать количество различных элементов.
 */
function getAmountNumberOfDifferent ($arr) 
{
    $total = count($arr);
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] === $arr[$j]) {
                $total--;
            }
        }
    }
}

echo getAmountNumberOfDifferent([2, 4, 5, 6, 3, 2, 7]);