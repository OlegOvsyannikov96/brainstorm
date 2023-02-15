<?php
/** 
 * Получить все четырехзначные числа, в записи которых встречаются только 
 * цифры 0,2,3,7. Тут речь идёт про числа, где встречается только данный набор цифр, 
 * без повторений, т.е. 2037 -верно, 2000 - не верно
 */
function isMagicNumber (int $number): bool
{
    $controlSum = 0;
    while ($number) {

        $digit = $number % 10;
        if (
            !($digit === 0
            || $digit === 2
            || $digit === 3
            || $digit === 7)       
        ) {
            return false;
        }

        $controlSum += $digit;
        $number = ($number - $digit) / 10;
    }

    $isMgNum = $controlSum === 12 ? true : false;
    return $isMgNum;
}

$numbers = [];
for ($i = 1000; $i < 10000; $i++) {
    if (!(isMagicNumber($i))) continue;

    $numbers[] = $i;
}