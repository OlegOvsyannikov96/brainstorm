<?php
/**
 * В массиве А(N,М) найти номер строки, среднее арифметическое положительных элементов
 * которой является наименьшим.
 */
$arr = [
    [-1, -2, 3, 9],
    [5, 6, 7, -8, 0],
    [9, 0, 8, -7, 3, 5],
    [6, -1, 4, 3],
    [-9, -3],
];

$line = -1;
$average = 0;
for ($i = 0; $i < count($arr); $i++) {

    $sum = 0;
    $total = 0;
    for ($j = 0; $j < count($arr[$i]); $j++) {

        if ($arr[$i][$j] > 0) {
            $sum += $arr[$i][$j];
            $total++;
        }
    }

    if ($average) {
        if ($average > $sum / $total) {
            $average = $sum / $total;
            $line = $i;
        }
    } else {
        $average = $sum / $total;
        $line = $i;
    }
}

if ($line > -1) echo 'line: ' . $line;