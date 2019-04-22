<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
function EntryNodeOfLoop($pHead)
{
    if($pHead == null || $pHead->next == null)
        return null;
    $p1 = $pHead;
    $p2 = $pHead;
     
    while($p2!=null && $p2->next!=null){
        $p1 = $p1->next;
        $p2 = $p2->next->next;
        if($p1 == $p2){
            $p2 = $pHead;
            while($p1!=$p2){
                $p1 = $p1->next;
                $p2 = $p2->next;
            }
            if($p1 == $p2)
                return $p1;
        }
    }
    return null;
}
