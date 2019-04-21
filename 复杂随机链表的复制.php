<?php
/*class RandomListNode{
    var $label;
    var $next = NULL;
    var $random = NULL;
    function __construct($x){
        $this->label = $x;
    }
}*/
$r = [];
function MyClone($pHead)
{
    global $r;
    // write code here
    if($pHead==NULL)
        return NULL;
           
    //开辟一个新节点
    $pClonedHead=new RandomListNode($pHead->label);
//    $pClonedHead->next = $pHead->next;
    //递归其他节点
    $pClonedHead->next=MyClone($pHead->next);
    $pClonedHead->random = ($pHead->random);
 
    return $pClonedHead;
}
