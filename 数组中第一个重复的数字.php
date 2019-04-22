<?php

function duplicate($numbers, &$duplication)
{
    // write code here
    //这里要特别注意~找到任意重复的一个值并赋值到duplication[0]
    //函数返回True/False
    $flag=false;
    $numcount=array_count_values($numbers);
    foreach($numcount as $key=>$val){
        if($val>1){
            $duplication[0]=$key;
            $flag=true;
            break;
        }
    }
    return $flag;
}
