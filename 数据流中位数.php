<?php
 
global $arr;
$arr=array();
function Insert($num)
{
    global $arr;
    array_push($arr,$num);
}
function GetMedian(){
    global $arr;
    if (count($arr)%2==1){
        sort($arr);
        return $arr[(count($arr)+1)/2-1];
    }else{
        sort($arr);
        return ($arr[count($arr)/2]+$arr[(count($arr)/2)-1])/2;
    }
}
