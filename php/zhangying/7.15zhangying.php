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
     * @return Boolean
     */
    function hasCycle($head) {
        //只有一个
        if($head == null || $head->next == null) return false;
        //快慢指针
        $fast = $head;
        $slow = $head;
        //环形不可能存在终点，快慢指针 在环形上总有一天会相遇
        while ($fast != null || $fast->next != null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow == $fast) {
                return true;
            }
        }
        return false;
    }
}