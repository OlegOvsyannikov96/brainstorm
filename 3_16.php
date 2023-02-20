<?php
/**
 * В массиве А(N,M) расположить строки по убыванию значений 
 * максимальных элементов строк.
 */
function getMaxElement ($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {

        if ($max < $arr[$i]) $max = $arr[$i]; 
    }

    return $max;
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
function getMaxElements ($arr)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {
       
        $res[] = getMaxElement($arr[$i]);
    }

    bSort($res);

    return $res;
}

$arr = [
    [1, 7, -5, 2, 2],
    [2, 6, 1, -4, 5],
    [6, 2, 2, 1, 9],
    [1, -5, 3, -7, 8],
];

$res = [];
$maxElements = getMaxElements($arr);
for ($i = 0; $i < count($maxElements); $i++) {

    for ($j = 0; $j < count($arr); $j++) {

        if (getMaxElement($arr[$j]) === $maxElements[$i]) {

            $res[$i] = $arr[$j];
        }
    }
}

print_r($res);