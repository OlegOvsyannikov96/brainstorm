<?php
/**
 * Получить упорядоченный по возрастанию массив С(К) путем слияния двух порядоченных 
 * по возрастанию массивов А(N) и В(М), где К=М+N.
 */
$arr1 = [1, 3, 5, 6, 9];
$arr2 = [0, 1, 2, 4, 5, 7, 8, 9];
$res = [];

$lArr = count($arr1) < count($arr2) ? $arr1 : $arr2;
$bArr = count($arr1) > count($arr2) ? $arr1 : $arr2;

for ($i = 0; $i < count($lArr); $i++) {
    $res[] = $lArr[$i] + $bArr[$i];
}

for ($j = count($lArr); $j < count($bArr); $j++) {
    $res[] = $bArr[$j];
}

print_r($res);