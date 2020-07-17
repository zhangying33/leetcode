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
    function detectCycle($head) {
        //数组方式 -- 太慢。
        $pos = $head;
        $arr = [];
        while ($pos != null) {
            if (array_search($pos,$arr) !== false) { //有存在0的情况
                return $pos;
            }
            $arr[] = $pos;
            $pos = $pos->next;
        }
        return false;

    }
}