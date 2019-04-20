<?php
global $mystack;
$mystack = [];
function mypush($node)
{
    global $mystack;
    array_push($mystack, $node);
}
function mypop()
{
    global $mystack;
    array_pop($mystack);
}
function mytop()
{
    global $mystack;
    if(count($mystack) == 0)
        return null;
    return $mystack[count($mystack) - 1];
}
function mymin()
{
    global $mystack;
    $min = $mystack[0];
    for($i = 0; $i < count($mystack); $i++){
        if($mystack[$i] < $min){
            $min = $mystack[$i];
        }
    }
    return $min;
}
