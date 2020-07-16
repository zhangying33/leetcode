<?php

#142 环形链表II  7月16日李岩
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
//快慢指针
function detectCycle($head) {
    $fast = $head;
    $slow = $head;
    while($fast !== null || $fast->next !== null){
        $fast = $fast->next->next;
        $slow = $slow->next;
        if($fast === $slow){  //第一次相遇
            $fast = $head;
            while($fast !== $slow){
                $fast = $fast->next;
                $slow = $slow->next;
            }
            return $fast; //第二次相遇
        }
    }
    return false;
}