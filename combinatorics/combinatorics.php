<?php
class Combinatorics
{
    public function showSubStr ($str, $length)
    {
        if (empty($str)) throw new Exception("empty string!");
        if ($length < 1 || $length > strlen($str)) {
                throw new Exception("subline length out of range!");
            }

        $arr = str_split($str);

        $res = $this->getAllSubStr($arr, $length);
        
        if ($this->getNumberOfPlacements(count($arr), $length) === count($res)) {

            for ($i = 0; $i < count($res); $i++) {
   
                echo $res[$i] . "</br>";
            }
        }
    }
    private function getNumberOfPlacements ($length, $subLength): int
    {
        $fN = 1;
        $fM = 1;
        $m = $length - $subLength;
        for ($i = 1; $i <= $length; $i++) $fN *= $i;
        for ($i = 1; $i <= $m; $i++) $fM *= $i;

        return $fN / $fM;
    }
    private function getAllSubStr ($arr, $length, &$res = [], $right = []): array 
    {
        $left = [];
        for ($i = 0; $i < count($arr); $i++) {
        
            $left = array_splice($arr, $i, 1);

            $temp = array_merge($right, $left);
            if (count($temp) === $length) {

                array_push($res, join('', $temp));
            }

            $this->getAllSubStr($arr, $length, $res, $temp);
        
            array_splice($arr, $i, 0, $left[0]);
        }
    
        return $res;
    }
}