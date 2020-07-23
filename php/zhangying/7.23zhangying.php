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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode(null);
        $curr1 = $l1;
        $curr2 = $l2;
        $curr = $dummy;
        $yichu = 0;
        while ($curr1 != null || $curr2 != null) {
            $cval1 = !empty($curr1->val) ? $curr1->val : 0;
            $cval2 = !empty($curr2->val) ? $curr2->val : 0;
            $sum = $yichu+$cval1+$cval2;
            $yichu = $sum / 10;
            $curr->next = new ListNode($sum % 10);
            $curr = $curr->next;
            $curr1 = $curr1->next;
            $curr2 = $curr2->next;
        }
        if((int)$yichu == 1) {
            $curr->next = new ListNode((int)$yichu);
        }
        return $dummy->next;
    }
}