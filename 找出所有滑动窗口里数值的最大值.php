<?php

function maxInWindows($num, $size)
{
    // write code here
    if($num==null || $size<=0)
        return [];
    $len=count($num);
    $l=$len-$size+1;//最后一个子数组的首元素位置
    $max=0;
    $s=array();
    for($i=0;$i<$l;$i++)
        {
        $max=0;
        for($j=$i;$j<$i+$size;$j++)
            {
            if($max<$num[$j])
                $max=$num[$j];
        }//筛选出最大元素
        array_push($s,$max);
    }
    return $s;
}
