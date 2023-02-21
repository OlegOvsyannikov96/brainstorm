<?php
/**
 * В массиве А(N,M) элементы, кратные заданному числу р, переместить в начало 
 * строк и расположить их в порядке возрастания.
 */
function show ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {
    
            echo $arr[$i][$j] . ' ';
        }
        echo '</br>';
    }
    echo '</br>';
}
function bSort (&$arr)
{
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        
        for ($j = 0; $j <= ($i-1); $j++) {
          
            if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
          }
      }
    }
}
function getNewArr ($arr, $number) 
{
    $mulNums = [];
    $notMulNums = [];
    for ($i = 0; $i < count($arr); $i++) {

        if (!($arr[$i] % $number)) $mulNums[] = $arr[$i];
        if ($arr[$i] % $number) $notMulNums[] = $arr[$i];
    }

    sort($mulNums);

    return array_merge($mulNums, $notMulNums);
}

$arr = [
    [1, 7, -5, 2, 2],
    [2, 6, 1, -4, 5],
    [6, 2, 2, 1, 9],
    [1, -5, 3, -7, 8],
];

show($arr);

$p = 3;
for ($i = 0; $i < count($arr); $i++) {

    $arr[$i] = getNewArr($arr[$i], $p);
}

show($arr);