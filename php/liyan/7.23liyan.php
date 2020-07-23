<?php
#2. 两数相加 7.23liyan

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
        $dummy = new ListNode(0);
        $curr = $dummy;
        $n1 = $l1;
        $n2 = $l2;
        $carry = 0;
        while($n1 != null || $n2 != null){
            $x = ($n1 != null) ? $n1->val : 0;
            $y = ($n2 != null) ? $n2->val : 0;
            $sum = $x+$y+$carry;
            $carry = floor($sum/10);
            $curr->next = new ListNode($sum%10);
            $curr = $curr->next;
            if($n1 != null)$n1 = $n1->next;
            if($n2 != null)$n2 = $n2->next;
        }
        if($carry > 0)$curr->next = new ListNode($carry);
        return $dummy->next;

    }
}