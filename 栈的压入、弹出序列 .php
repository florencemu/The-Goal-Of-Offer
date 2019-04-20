/*借用一个辅助的栈，遍历压栈顺序，先讲第一个放入栈中，这里是1，然后判断栈顶元素是不是出栈顺序的第一个元素，这里是4，很显然1≠4，所以我们继续压栈，直到相等以后开始出栈，出栈一个元素，则将出栈顺序向后移动一位，直到不相等，这样循环等压栈顺序遍历完成，如果辅助栈还不为空，说明弹出序列不是该栈的弹出顺序。 */

<?php
function IsPopOrder($pushV, $popV)
{
    // write code here
    $stack = new SplStack();
    $len = count($pushV);
    $j = 0;
    for($i=0;$i<$len;$i++){
        $stack->push($pushV[$i]);           
        while($j<$len && $popV[$j]==$stack->top()){
            $stack->pop();
            $j++;
        }
    }
    if($stack->isEmpty()){
        return true;
    }
    return false;
}
