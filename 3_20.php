<?php
/**
 * В массиве А(N,M) переставить строки так, чтобы строка с максимальной суммой 
 * элементов стала первой строкой, а остальные строки расположить в порядке 
 * возрастания элементов первого столбца.
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
          
            if ($arr[$j][0] > $arr[$j + 1][0]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
          }
      }
    }
}
function getMaxSum ($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {

        $sum += $arr[$i];
    }

    return $sum;
}
function getLineWithMaxSum ($arr) 
{
    $index = 0;
    $max = getMaxSum($arr[0]);
    for ($i = 1; $i < count($arr); $i++) {

        if ($max < getMaxSum($arr[$i])) {

            $max = getMaxSum($arr[$i]);
            $index = $i;
        }
    }

    return $index;
}
function getNewArr ($arr)
{
    bSort ($arr);
    $index = getLineWithMaxSum($arr);

    $res = [$arr[$index]];
    for ($i = 0; $i < count($arr); $i++) {

        if ($i === $index) continue;
        $res[] = $arr[$i];
    }

    return $res;
}


$arr = [
    [17, 7, -5, 2, 12, 0],
    [2, 16, 13, -4, 5, 3],
    [6, 26, 11, 9, 7, 15],
    [1, -5, 31, -7, 8, 2],
];

show($arr);

$arr = getNewArr($arr);

show($arr);