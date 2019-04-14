<?php

function Power($base, $exponent)
{
         
    if($exponent >= 0){
        $res = 1;
    while($exponent >= 1){
        $res = $res * $base;
        $exponent--;
    }
          return $res;
    }
    if($exponent < 0){
        $exponent2 = abs($exponent);
        $res = 1;
        while($exponent2 >=1){
            $res = $res *$base;
            $exponent2--;
        }
        return 1/$res;
         
    }
   
}
