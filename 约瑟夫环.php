<?php
 
function LastRemaining_Solution($n, $m)
{
    // write code here
     if($n==0){
          return -1;
     }
        
    $s=0;
    for($i=2;$i<=$n;$i++)
        {
            $s=($s+$m)%$i;/*约瑟夫环的推倒公式*/
              
        }
    return $s;
     
}
