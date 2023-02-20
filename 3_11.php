<?php
/**
 * В массиве А(N,М) удалить нулевые строки.
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
function isZeroLine ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] !== 0) return false;
    }

    return true;
}
function getIndexZeroLines ($arr)
{
    $lines = [];
    for ($i = 0; $i < count($arr); $i++) {

        if (isZeroLine($arr[$i])) $lines[] = $i;
    }

    return $lines;
}
function getNonZeroLines ($arr, $zeroLines)
{
    $res = [];
    for ($i = 0; $i < count($arr); $i++) {

        $zeroLine = false;
        for ($j = 0; $j < count($zeroLines); $j++) {

            if ($i === $zeroLines[$j]) {

                $zeroLine = true;
                break;
            }
        }

        if (!$zeroLine) $res[] = $arr[$i];
    }

    return $res;
}

$arr = [
    [1, 4, 5, 2, -6, 4, 9],
    [2, 5, -1, 4, 6, -8, 0],
    [0, 0, 0, 0, 0, 0, 0],
    [6, 2, 2, 4, 0, 8, 3],
];

show($arr);

$zeroLines = getIndexZeroLines($arr);
$arr = getNonZeroLines($arr, $zeroLines);

show($arr);