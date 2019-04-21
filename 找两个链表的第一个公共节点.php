<?php
/*class ListNode{
    var $val;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/


/*若list1走完list2未完时，走list2，反之亦然。如果相交，则必有两指针相遇，相遇节点即相交点*/
   function FindFirstCommonNode($pHead1, $pHead2)
{
    // write code here
    $p1 = $pHead1;
    $p2 = $pHead2;
    while($p1 != $p2){
        $p1 = ($p1==null? $pHead2: $p1->next);
        $p2 = ($p2==null? $pHead1: $p2->next);
    }
    return $p1;
}

