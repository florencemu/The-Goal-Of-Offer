<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function ReverseList($pHead)
{
    if($pHead == null || $pHead->next == null){
        return $pHead;
    }
    $p = $pHead;
    $q = $p->next;
    $p->next = null;
    while($q){
        $r = $q->next;
        $q->next = $p;
        $p = $q;
        $q = $r;
    }
    return $p;
}
