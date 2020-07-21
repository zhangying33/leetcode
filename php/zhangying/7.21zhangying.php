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
     * @param Integer $x
     * @return ListNode
     */
    function partition($head, $x) {
        if($head == null) return $head;
        $curr = $head;
        $big_en = new ListNode(null);
        $small_en = new ListNode(null);
        $big = $big_en;
        $small = $small_en;
        while ($curr != null) {
            if ($curr->val < $x) {
                $small->next = $curr;
                $small = $small->next;
            } else {
                $big->next = $curr;
                $big = $big->next;
            }
            $curr = $curr->next;
        }
        $big->next = null;
        $small->next = $big_en->next;
        return $small_en->next;
    }
}