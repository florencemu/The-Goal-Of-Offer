<?php
//Init module if you need
function Init(){
    global $result;
    $result=[];
     
}
//Insert one char from stringstream
function Insert($ch)
{
    // write code here
    global $result;
    $result[]=$ch;
}
//return the first appearence once char in current stringstream
function FirstAppearingOnce()
{
    // write code here
    global $result;
    $arr_count=array_count_values($result);
    foreach($arr_count as $k=>$v){
        if($v==1) return $k;
    }
    return "#";
}
