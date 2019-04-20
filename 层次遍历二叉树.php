<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function PrintFromTopToBottom($root)
{
    $return = [];
    array_push($return, $root->val);
    inQueue($root, $return);
    return $return;
}
 
function inQueue($root, &$return){
    if($root == NULL){
        return ;
    }
    if($root->left){
        $left = $root->left;
        array_push($return, $left->val);
    }
    if($root->right){
        $right = $root->right;
        array_push($return, $right->val);
    }   
    inQueue($left, $return);
    inQueue($right, $return);
}
