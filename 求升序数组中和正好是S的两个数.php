<?php

function FindNumbersWithSum($array, $sum)
{
     $low = 0;
    $high = count($array)-1;
    $res = array();
    while($low<$high){
        if($array[$low]+$array[$high]==$sum){
            $res[] = $array[$low]; 
            $res[] = $array[$high];
            return $res;
        }
        if($array[$low]+$array[$high]>$sum){
            $high--;
        }else{
            $low ++;
        }
    }
    return $res;
}
