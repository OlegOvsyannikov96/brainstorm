<?php
/**
 * В массив А(N,М) вставить одномерный массив В(N), расположив его перед последним
 * столбцом, содержащим нулевой элемент. Если такого столбца не окажется, то вставить 
 * массив В(N) после последнего столбца.
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
function getIndexColumnWithLastZeroElement ($arr)
{
    $index = -1;
    for ($i = 0; $i < count($arr); $i++) {

        for ($j = 0; $j < count($arr[$i]); $j++) {

            if ($arr[$i][$j] === 0 && $j > $index) $index = $j;
        }
    }

    return $index;
}
function insertVectorToArr ($arr, $vector, $index)
{
    if ($index === -1) {

        $arr[] = $vector;
        return $arr;
    }

    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        $res[] = $arr[$i];
        if ($i === $index) $res[] = $vector;
    }

    return $res;
}

$arr = [
    [1, 4, 5, 2, 6, 4, 9],
    [2, 5, 1, 4, 1, 8, 3],
    [1, 5, 3, 7, 9, 2, 1],
    [6, 2, 2, 1, 1, 8, 3],
];
$vector = [5, 7, 4, 9];
$index = getIndexColumnWithLastZeroElement($arr);

show($arr);

$arr = transpose($arr);
$arr = insertVectorToArr($arr, $vector, $index);
$arr = transpose($arr);

show($arr);