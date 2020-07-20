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
     * @param Integer $m
     * @param Integer $n
     * @return ListNode
     */
    function reverseBetween($head, $m, $n) {
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $pre = $dummy;
        for($i=1;$i<$m;$i++){
            $pre = $pre->next;
        }
        $head = $pre->next;
        for($i=$m;$i<$n;$i++){
            $nex = $head->next;
            $head->next = $nex->next;
            $nex->next = $pre->next;
            $pre->next = $nex;
        }
        return $dummy->next;
    }
}