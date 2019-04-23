<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function MySerialize($pRoot)
{
    return serialize($pRoot);
    // write code here
}
function MyDeserialize($s)
{
    return unserialize($s);
    // write code here
}
