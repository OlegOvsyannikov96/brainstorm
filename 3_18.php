<?php
/**
 * Известно, что в каждой строке и каждом столбце массива А(N,N) 
 * имеется единственный отрицательный элемент. Переставить строки массива так, 
 * чтобы отрицательные элементы находились на главной диагонали.
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

function getIndexNegativeElement ($arr)
{
    for ($i = 0; $i < count($arr); $i++) {

        if ($arr[$i] < 0) return $i;
    }

    return -1;
}
function bSort (&$arr)
{
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        
        for ($j = 0; $j <= ($i-1); $j++) {
          
            if (getIndexNegativeElement($arr[$j]) > getIndexNegativeElement($arr[$j + 1])) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp;
          }
      }
    }
}

$arr = [
    [1, 7, -5, 2, 2],
    [2, 6, 1, -4, 5],
    [6, -2, 2, 1, 9],
    [1, 5, 3, 7, -8],
    [-2, 6, 1, 4, 5],
];

show($arr);

bSort($arr);

show($arr);