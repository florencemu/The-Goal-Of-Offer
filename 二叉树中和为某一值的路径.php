<?php

/*class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}*/
function FindPath($root, $num)
{
    $a = $q = [];
    if (!$root) {
        return $a;
    }
    find($root, $num, $q, $a);
    return $a;
}
  
function find($root, $sum, $q, &$a)
{
    if ($root !== null) {
        $sum -= $root->val;
        $q[] = $root->val;
        if ($sum > 0) {
            find($root->left, $sum, $q, $a);/*先向左探测和*/
            find($root->right, $sum, $q, $a);/*左探测完毕再探测右*/
        } elseif ($sum == 0 && $root->left == null && $root->right == null)/*正好在根节点和相同*/ {
            $a[] = $q;
        }
    }
}
