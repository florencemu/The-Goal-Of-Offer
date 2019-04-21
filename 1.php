<?php

function FirstNotRepeatingChar($str)
{
 $a=[];
    for($i=0;$i<strlen($str);$i++){
        $a[]=$str{$i};
    }
    $b=array_count_values($a);
    foreach($b as $key=>$value){
        if($value==1){
            return strpos($str,$key);
            break;
        }
    }
    return -1;
}

