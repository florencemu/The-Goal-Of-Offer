<?php
 
/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function HasSubtree($pRoot1, $pRoot2)
{
    // write code here
    if($pRoot1 == NULL || $pRoot2 == NULL){
        return false;
    }
    return isSubtree($pRoot1, $pRoot2) ||
        HasSubtree($pRoot1->left, $pRoot2) || HasSubtree($pRoot1->right, $pRoot2);
}
 
function isSubtree($pRoot1, $pRoot2){
    if( $pRoot2 == NULL){
        return true;
    }
    if($pRoot1 == NULL){
        return false;
    }
    return $pRoot1->val == $pRoot2->val && isSubtree($pRoot1->left, $pRoot2->left) && isSubtree($pRoot1->right, $pRoot2->right);
}
