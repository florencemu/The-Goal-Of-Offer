<?php

function reOrderArray($array)
{
    $tmp1 = [];
    $tmp2 = [];
    for($i = 0;$i < count($array);$i++){
        if($array[$i] % 2){
            $tmp1[] = $array[$i];
        }else{
        $tmp2[] = $array[$i];
        }
    }
    for($j = 0;$j < count($tmp2);$j++){
        $tmp1[]=$tmp2[$j];
    }
    return $tmp1;
}
