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
    function isPalindrome($head) {
        if($head == null || $head->next == null) {
            return true;
        }
        if($head->next->next == null) {
            if($head->val != $head->next->val) {
                return false;
            }else {
                return true;
            }
        }
        //快慢指针。找到中间节点
        $half = $this->intermediate($head);
        //翻转后半部分链表
        $lastfirst = $this->onreturn($half);
        //遍历对比
        while ($lastfirst != null) {
            if ($head->val != $lastfirst->val) { //不一样直接返回错误
                return false;
            }
            $head = $head->next;
            $lastfirst = $lastfirst->next;
        }
        return true;
    }
    //翻转链表
    function onreturn($head)
    {
        $prev = null;
        $curr = $head; //头节点
        while ($curr != null) {
            $tmp = $curr->next;
            $curr->next = $prev;
            $prev = $curr;
            $curr = $tmp;
        }
        return $prev;
    }
    //中间节点
    function  intermediate($head)
    {
        $slow = $head;
        $fast = $head;
        while($fast != null && $fast->next != null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}