<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function inorder($root,&$res){
    if($root!=null){
        inorder($root->left,$res);
        $res[] = $root;
        inorder($root->right,$res);
    }
}
//后序遍历
 
function KthNode($pRoot, $k){
   $inorder = array();
   inorder($pRoot,$inorder);
   return $inorder[$k-1];
}
