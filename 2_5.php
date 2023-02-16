<?php
/**
 * В массиве А(N) каждый элемент равен 0, 1 или 2. 
 * Переставить элементы массива так, чтобы сначала расположились все нули, 
 * затем все двойки и, наконец, все единицы.
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

$arr = [0, 2, 1, 0, 2, 2, 1, 0, 1];
quickSort($arr, 0, count($arr) - 1);
print_r($arr);