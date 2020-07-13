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
    function reverseList($head) { //迭代算法
        //y相当于新链表
        $prev = null;
        $curr = $head; //申请头节点
        while ($curr != null) { //链表尾部，为null时链表结束
            $tmp = $curr->next; //当前节点的下一节点 //设置下一节点
            $curr->next = $prev; // 重新赋值下一节点为null
            $prev = $curr; //链表
            $curr = $tmp; //设置下一次迭代的当前节点
        }
        return $prev;
    }

}