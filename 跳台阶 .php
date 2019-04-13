<?php

 
function jumpFloor($number)
{
     $array = [];
    $array[0] = 0;
    $array[1] = 1;
    $array[2] = 2;
    for($i = 3; $i <= $number; $i++) {
        $array[$i] = $array[$i-1] + $array[$i-2];
    }
    return $array[$number];
}
