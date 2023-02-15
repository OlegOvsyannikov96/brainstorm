<?php
/** 
 * Определить количество цифр, меньших 5, используемых при записи натурального числа N.
 */
function countingDigits (int $number): int 
{
    $count = 0;    
    while ($number) {
        $digit = $number % 10;
        if ($digit < 5) $count++;
        
        $number = ($number - $digit) / 10;
    }

    return $count;
}