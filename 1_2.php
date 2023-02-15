<?php
/** 
 * Выяснить, образуют ли цифры данного натурального 
 * числа N возрастающую последовательность.
 */
function isAscendingSequence (int $number): bool
{
    if ($number / 10 < 1) return false;

    $digit = 10;
    while ($number) {
        if ($digit <= $number % 10) return false;
        
        $digit = $number % 10;
        $number = ($number - $digit) / 10;
    }

    return true;
}