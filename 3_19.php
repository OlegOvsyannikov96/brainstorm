<?php
/**
 * В массиве А(N,M) расположить элементы строк в порядке убывания. 
 * Вставить в каждую строку заданное число р, не нарушая этот порядок.
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
          
            if ($arr[$j] < $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
          }
      }
    }
}

$arr = [
    [17, 7, -5, 2, 12, 0],
    [2, 16, 13, -4, 5, 3],
    [6, 26, 11, 9, 7, 15],
    [1, -5, 31, -7, 8, 2],
];

show($arr);

$p = 10;
for ($i = 0; $i < count($arr); $i++) {

    $arr[$i][] = $p;
    bSort($arr[$i]);
}

show($arr);
