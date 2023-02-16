<?php
/**
 * В массиве А(N,N) найти суммы элементов, расположенных на главной диагонали, 
 * ниже диагонали и выше диагонали.
 */
$arr = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 0, 8, 7],
    [6, 1, 4, 3],
];

$sumTop = 0;
$sumBottom = 0;
$sumDiagonal = 0;
for ($i = 0; $i < count($arr); $i++) {

    for ($j = 0; $j < count($arr[$i]); $j++) {

        if ($j > $i) {
            $sumTop += $arr[$i][$j];
        } elseif ($j < $i) {
            $sumBottom += $arr[$i][$j];
        } else {
            $sumDiagonal += $arr[$i][$j];
        }
    }
}

echo $sumDiagonal . ' | ' . $sumBottom .  ' | ' . $sumTop;