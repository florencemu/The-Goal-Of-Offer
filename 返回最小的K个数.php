<?php

function GetLeastNumbers_Solution($input, $k)
{
    $result = array();
    if(!$input) return $input;
    if($k>count($input)) return $result;
    sort($input);
    for($i=0;$i<$k;$i++){
        $result[] = $input[$i];
    }
    return $result;
}

/*

<?php
 
function GetLeastNumbers_Solution($input, $k)
{
    // write code here
    $length=count($input);
    $result=array();
    if($length>0 && $length>=$k){
        sort($input);
        $result = array_slice($input,0,$k);
        return $result;
    }else{
        return $result;
    }
}


*/
