<?php

function MoreThanHalfNum_Solution($numbers)
{
    // write code here
    if(count($numbers) <= 0)
        return 0;
    $list = array_count_values($numbers);/*统计数组中所有值出现的次数*/
    $max = max($list);
    if(2*$max > count($numbers))
        return array_search($max, $list);
    else
        return 0;
}
