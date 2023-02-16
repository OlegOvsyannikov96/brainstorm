<?php
/**
 * Получить упорядоченный по возрастанию массив С(К) путем слияния двух порядоченных 
 * по возрастанию массивов А(N) и В(М), где К=М+N.
 */
function quickSort(&$arr, $low, $high) 
{
    $i = $low;                
    $j = $high;
    $middle = $arr[ ( $low + $high ) / 2 ];
    do {
        while($arr[$i] < $middle) ++$i;
        while($arr[$j] > $middle) --$j;
        
        if($i <= $j){           
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
            
            $i++; $j--;
        }
    } 
    while($i < $j);

    if($low < $j){
      quickSort($arr, $low, $j);
    } 

    if($i < $high){
      quickSort($arr, $i, $high);
    }
}

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

quickSort($res, 0, count($res) - 1);
print_r($res);