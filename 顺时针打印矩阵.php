<?php

function printMatrix($matrix)
{
    // write code here
    $output = [];
    $left = 0;
    $right = count($matrix[0])-1;
    $top = 0;
    $buttom = count($matrix)-1;
    while($left <= $right && $top <= $buttom) {
        for ($i = $left; $i <= $right; $i++) 
            $output[] = $matrix[$top][$i];//向左探测
         if ($top >= $buttom) break;
        for ($i = $top + 1; $i <= $buttom; $i++) 
            $output[] = $matrix[$i][$right];//向下探测
         if ($left>=$right) break;
        for ($i = $right - 1; $i >= $left; $i--) 
            $output[] = $matrix[$buttom][$i];//向右探测
         if ($buttom - 1 <= $top) break;
        for ($i = $buttom -1 ; $i > $top; $i--) 
            $output[] = $matrix[$i][$left];//向上探测
        $left++;
        $right--;
        $top++;
        $buttom--;
    }
    return $output;
}
