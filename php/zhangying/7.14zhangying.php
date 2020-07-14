<?php
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
     * @return ListNode
     */
    function swapPairs($head) {
        if ($head === null || $head->next === null) {
            return $head;
        }
        $dummyHead = new ListNode(null);
        $dummyHead->next = $head;
        $cur = $dummyHead;
        while ($cur->next !== null && $cur->next->next !== null) {
            $a = $cur->next;
            $b = $cur->next->next;
            $cur->next = $b;
            $a->next = $b->next; //翻转
            $b->next = $a;
            $cur = $cur->next->next;
        }
        return $dummyHead->next;
    }
}
