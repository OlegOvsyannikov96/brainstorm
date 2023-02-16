<?php
/**
 * Определить, является ли число 2n m симметричным, т. е. 
 * запись числа содержит четное количество цифр и совпадают его левая и 
 * правая половинки.
 */
function getCountDigits ($number): int
{
    $digits = 0;
    while ($number >= 1) {
        $number /= 10;
        $digits++;
    }

    return $digits;
}

$number = 123456654322;
$digits = getCountDigits($number);
if ($digits % 2 === 0) {
    
    $digits /= 2;
    $rNumber = 0;
    while ($digits) {
        $rNumber += (($number % 10) * (10 ** ($digits - 1)));
        $number = (int) ($number / 10);
        $digits--;
    }

    if ($number === $rNumber) {
        echo "Number is symmetric";
    } else {
        echo "Number is not symmetric";
    }
} else {
    echo "Number has odd digits";
}