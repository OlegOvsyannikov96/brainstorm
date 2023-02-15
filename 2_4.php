<?php
/**
 * В массив А(N), упорядоченный по возрастанию, вставить k элементов, 
 * не нарушая его последовательности.
 */
function insertByIndex ($arr, $element, $index)
{   
    if (!$index) {
        return array_merge([$element], $arr);
    }

    $front = [];
    $back = [];
    for ($i = 0; $i < count($arr); $i++) {
        ($i < $index) ? $front[] = $arr[$i] : $back[] = $arr[$i];
    }
    $res = array_merge($front, [$element], $back);

    return $res;
}

function insert ($arr, ...$numbers) 
{
    for ($i = 0; $i < count($numbers); $i++) {
        $index = 0;
        for ($j = 0; $j < count($arr); $j++) {
            if ($arr[$j] > $numbers[$i]) {
                $index = $j;
                break; 
            }
        }
        
        $arr = insertByIndex($arr, $numbers[$i], $index);
    }

    return $arr;
}

$arr = insert([1, 2, 2, 3, 4, 6, 9], 2, 4, 8);
print_r($arr);