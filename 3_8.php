<?php
/**
 * В каждой строке массива А(N,М) удалить все четные положительные элементы, 
 * стоящие между первым и последним максимальными элементами.
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
function getIndexsesFirstAndLastMaxElements ($arr)
{
    $indexFirstMaxElem = 0;
    $indexLastMaxElem = 0;
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$indexFirstMaxElem] < $arr[$i]) $indexFirstMaxElem = $i;   
    }
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === $indexFirstMaxElem) continue;

        if ($arr[$indexLastMaxElem] < $arr[$i]) $indexLastMaxElem = $i;
    }

    if ($indexFirstMaxElem > $indexLastMaxElem) {

        $temp = $indexFirstMaxElem;
        $indexFirstMaxElem = $indexLastMaxElem;
        $indexLastMaxElem = $temp;
    }

    return [$indexFirstMaxElem, $indexLastMaxElem];
}
function delMagicElements ($arr)
{
    $res = [];
    $delZone = getIndexsesFirstAndLastMaxElements($arr);
    for ($i = 0; $i < count($arr); $i++) {

        if ($i > $delZone[0] && $i < $delZone[1]) {

            if ($arr[$i] > 0 && !($arr[$i] % 2)) continue;
        }

        $res[] = $arr[$i];
    }

    return $res;
}

$arr = [
    [1, 4, 5, 2, -6, 4, 9],
    [2, 5, -1, 4, 6, -8, 0],
    [0, 6, -2, 2, 4, 8, 3],
];

show($arr);

for ($i = 0; $i < count($arr); $i++) {

    $arr[$i] = delMagicElements($arr[$i]);
}

show($arr);