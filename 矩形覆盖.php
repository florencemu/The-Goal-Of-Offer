<?php

function rectCover($number)
{
    if($number <=0 ){
        return 0;
    }
    if($number == 1){
        return 1;
    }
    if($number == 2){
        return 2;
    }
    $first = 1;
    $second = 2;
    while($number > 2){
        $third = $first + $second;
        $first = $second;
        $second = $third;
        $number --;
    }
    return $third;
}
