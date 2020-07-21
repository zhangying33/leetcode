<?php
#92. 反转链表 II	ly 7.20
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}
function reverseBetween($head, $m, $n)
{
    if ($m == $n) return $head;
    $dummy = new ListNode(-1);
    $dummy->next = $head;
    $start = $dummy;
    $end = $dummy;

    for ($i = 0; $i < $m - 1; $i++) $start = $start->next;

    for ($i = 0; $i < $n; $i++) $end = $end->next;

    $b = $start->next;

    $c = $end->next;

    for ($p = $b, $q = $p->next; $q != $c;) {
        $o = $q->next;
        $q->next = $p;
        $p = $q;
        $q = $o;
    }

    $start->next = $end;
    $b->next = $c;

    return $dummy->next;
}

$node = new ListNode(5);
for($i=4;$i>0;$i--){
    $tmp = new ListNode($i);
    $tmp->next = $node;
    $node = $tmp;

}
reverseBetween($node,2,4);