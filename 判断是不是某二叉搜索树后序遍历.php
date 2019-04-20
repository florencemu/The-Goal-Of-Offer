<?php
 
function VerifySquenceOfBST($sequence)
{
    //copy de
    $size = count($sequence);
    if ($size==0) {return false;}
    $i = 0;
    while ($size--) {
        
        while ($sequence[$i++]<$sequence[$size]);
        while ($sequence[$i++]>$sequence[$size]);
         /*如果出现不符合二叉搜索树的条件，则$i一定会越界*/
        if ($i<$size) {
            return false;
        }
        $i=0;
    }
    return true;
}
