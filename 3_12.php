<?php
/**
 * В массиве А(N,М) удалить столбцы, все элементы которых являются простыми числами.
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
function transpose ($arr)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($res[$j]) {
                $res[$j][] = $arr[$i][$j]; 
            } else {
                $res[$j] = [$arr[$i][$j]];
            }
        }
    }

    return $res;
}
function isStrOfPrimes ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] === 1 || $arr[$i] === 2) continue;

        $temp = (int) ($arr[$i] / 2);
        for ($j = 2; $j <= $temp; $j++) {

            if (!($arr[$i] % $j)) return false;
        }
    }

    return true;
}
function delPrimesLines ($arr)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        if (!isStrOfPrimes($arr[$i])) $res[] = $arr[$i];
    }

    return $res;
}

$arr = [
    [1, 4, 5, 2, 6, 4, 9],
    [2, 5, 1, 4, 6, 8, 3],
    [1, 5, 3, 7, 9, 2, 1],
    [6, 2, 2, 4, 1, 8, 3],
];

show($arr);

$arr = transpose($arr);
$arr = delPrimesLines($arr);
$arr = transpose($arr);

show($arr);