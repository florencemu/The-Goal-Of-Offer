<?php

function FindNumsAppearOnce($array)
{
    $list = array_count_values($array);
    foreach($list as $key => $value){
        if($value==1) $a[]= $key ;
    }
    return $a;
}
