<?php
#2020.7.24 [19.删除链表的倒数第N个节点]
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {
        $dummy = new ListNode();
        $dummy->next = $head;
        $first = $dummy;
        $second = $dummy;
        for($i=1;$i<=$n+1;$i++){
            $first = $first->next;
        }
        while($first != null){
            $first = $first->next;
            $second = $second->next;
        }
        $second->next = $second->next->next;
        return $dummy->next;
    }
}


