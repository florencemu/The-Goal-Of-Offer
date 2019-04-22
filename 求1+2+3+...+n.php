<?php

 
function Sum_Solution($n)
{
    // write code here
    $n && $n+=Sum_Solution($n-1);
    return $n;
}
