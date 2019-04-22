<?php
 
function StrToInt($str)
{
    // write code here
    if(is_numeric($str))
        return $str+0;
    else
        return 0;
}
