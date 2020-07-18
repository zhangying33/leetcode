<?php

#142 环形链表  7月15日李岩
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val) { $this->val = $val; }
}
//快慢指针
function hasCycle($head)
{
    if ($head === null || $head->next === null) {
        return false;
    }
    $slow = $head;
    $fast = $head->next;
    while ($fast !== $slow) {

        if ($fast === null || $fast->next === null) {

            return false;
        }
        $slow = $slow->next;
        $fast = $fast->next->next;
    }
    return true;
}