<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function TreeDepth($pRoot)
{
     if (is_null($pRoot))
            return 0; 
     return max(TreeDepth($pRoot->left)+1,TreeDepth($pRoot->right)+1); 
}
