<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function FindKthToTail($head, $k)
{
    $tmp = $head;
    $len = 0;
    while($head != null){
        $len ++;
        $head = $head->next;
    }
    if($k > $len){
        return null;
    }
    for($i = 0;$i < $len-$k;$i++){
        $tmp = $tmp->next;
    }
    return $tmp;
}

