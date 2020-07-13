<?php

#206. 反转链表
/**
 * @param ListNode $head
 * @return ListNode
 */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
function reverseList($head) {
    $prev = null;
    $cur = $head;
    while($cur){
        $next = $cur->next;
        $cur->next = $prev;
        $prev = $cur;
        $cur = $next;
    }
    return $head;
}
