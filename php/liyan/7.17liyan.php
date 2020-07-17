<?php

#21. 合并两个有序链表  7月17日李岩
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
//循环解法
/**
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function mergeTwoLists($l1, $l2) {
    $node = new ListNode(-1);
    $prev = $node;
    while($l1 != null && $l2 != null){
        if($l1->val >= $l2->val){
            $prev->next = $l2;
            $l2 = $l2->next;
        }else{
            $prev->next = $l1;
            $l1=$l1->next;
        }
        $prev = $prev->next;
    }
    $prev->next = $l1->val === null ? $l2 : $l1;
    return $node->next;
}
