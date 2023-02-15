<?php
/** 
 * Найти все четные четырехзначные числа, цифры которых следуют в порядке 
 * возрастания или убывания.
 */
define('IS_ASCEND', 1);
define('IS_DESCEND', 0);
function isSequence (int $number, int $type): bool
{
    if ($number / 10 < 1) return false;

    $digit = $type ? 10 : 0;
    while ($number) {
        if ($type) {
            if ($digit <= $number % 10) return false;
        } else {
            if ($digit >= $number % 10) return false;
        }

        $digit = $number % 10;
        $number = ($number - $digit) / 10;
    }

    return true;
}

$numbers = [];
for ($i = 1000; $i < 10000; $i++) {
    if ($i % 2 != 0) continue;

    if(isSequence($i, IS_ASCEND)) $numbers[] = $i;
    if(isSequence($i, IS_DESCEND)) $numbers[] = $i;
}