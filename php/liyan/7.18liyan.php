<?php
#25. K 个一组翻转链表  7月18日李岩

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup($head, $k) {
        $listNode = new ListNode(null);
        $listNode->next = $head;
        $prev = $listNode;
        $end = $listNode;
        while($end->next != null){
            for($i=0;$i<$k && $end != null;$i++){
                $end = $end->next;
            }
            if($end === null)break;
            $start = $prev->next;
            $next = $end->next;
            $end->next = null;
            $prev->next = $this->reverse($start);
            $start->next = $next;
            $prev = $start;
            $end = $prev;

        }
        return $listNode->next;
    }

    function reverse($head){
        $prev = null;
        while($head != null){
            $temp = $head->next;
            $head->next = $prev;
            $prev = $head;
            $head = $temp;
        }
        return $prev;

    }
}
$obj = new Solution();
$node = new ListNode(5);
for($i=4;$i>0;$i--){
    $tmp = new ListNode($i);
    $tmp->next = $node;
    $node = $tmp;

}
$array = $obj->reverseKGroup($node, 2);
print_r($array);