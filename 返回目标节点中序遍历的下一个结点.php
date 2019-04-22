<?php
/*class TreeLinkNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    var $next = NULL;
    function __construct($x){
        $this->val = $x;
    }
}*/
//如果有右子树，则找右子树的最左节点
//没右子树，则找第一个当前节点是父节点左孩子的节点
//退到了根节点仍没找到，则返回null
function GetNext($pNode)
{
    // write code here
    if($pNode==null)
        return null;
    if($pNode->right)
        {
        $pNode=$pNode->right;
        while($pNode->left)
            {
            $pNode=$pNode->left;
        }
        return $pNode;
    }
    else
        while($pNode->next)
            {
            if($pNode->next->left==$pNode)
                return $pNode->next;
            $pNode = $pNode->next;
        }
    return null;
     
}
