<?php
#[237. 删除链表中的节点]  liyan 7.22
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

function deleteNode($node) {
    $node->val = $node->next->val;
    $node->next = $node->next->next;
}
