<?php

function GetNumberOfK($data, $k)
{
    $list = array_count_values($data);
    return isset($list[$k])?$list[$k]:0;
    

}
