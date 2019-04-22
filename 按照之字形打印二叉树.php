<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function MyPrint($pRoot)
{
    // write code here  这里用两个栈来相互取值就可以了
    $result = [];
    if(!$pRoot){
        return $result;
    }
    $stack1 = $stack2 = [];
    array_push($stack1, $pRoot);
    while(!empty($stack1) || !empty($stack2)){
        if(!empty($stack1)){
            $valList = [];
            while(!empty($stack1)){
                $pNode = array_pop($stack1);
                $valList[] = $pNode->val;
                if($pNode->left != null){
                    array_push($stack2, $pNode->left);
                }
                if($pNode->right != null){
                    array_push($stack2, $pNode->right);
                }
            }
             
          $result[] = $valList;
        }
        if(!empty($stack2)){
            $valList = [];
            while(!empty($stack2)){
                $pNode = array_pop($stack2);
                $valList[] = $pNode->val;
                if($pNode->right != NULL)
                    array_push($stack1, $pNode->right);
                if($pNode->left != NULL)
                    array_push($stack1, $pNode->left);
            }
            $result[] = $valList;
        }
    }
    return $result;
}
