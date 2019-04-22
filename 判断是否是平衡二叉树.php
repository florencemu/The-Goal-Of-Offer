<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function IsBalanced_Solution($pRoot)
{
    // write code here
    if($pRoot==null){return true;}
    $left = TreeDepth($pRoot->left);
    $right = TreeDepth($pRoot->right);
    $dif = abs($left-$right);
    if($dif>1){return false;}
    return IsBalanced_Solution($pRoot->left)&&IsBalanced_Solution($pRoot->right);
}
function TreeDepth($root){
    if(!$root || count($root)==0){return 0;}
    $left = TreeDepth($root->left);
    $right = TreeDepth($root->right);
    return max($left,$right)+1;
}
