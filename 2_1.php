<?php
/** 
 * В массиве А(N) найти: а) число элементов, предшествующих первому отрицательному 
 * элементу; б) сумму нечетных элементов массива, следующих за последним отрицательным
 * элементом.
 */
$numberOfElementsBefore = 0;
$indexOfLastNegativeElement = -1;
$sumOfOddElements = 0;

$arr = [2, 3, 0, 1, 9, -1, 7, 6, 4];
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] < 0) {
        $indexOfLastNegativeElement = $i;
        $sumOfOddElements = 0;
    } else {
        if ($arr[$i] % 2) $sumOfOddElements += $arr[$i];
    }

    if ($indexOfLastNegativeElement === -1) {
        $numberOfElementsBefore++;
        $sumOfOddElements = 0;
    }
}
