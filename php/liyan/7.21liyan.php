<?php
#86. 分隔链表  liyan 7.21
class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}
function partition($head, $x) {
    $left_head = new ListNode(-1); //哑节点
    $left = $left_head;//左侧最后节点
    $right_head = new ListNode(-1);//哑节点
    $right = $right_head;//右侧最后节点
    while($head != null){
        if($head->val < $x){
            $left->next = $head;
            $left = $left->next;

        }else{
            $right->next = $head;
            $right = $right->next;
        }
        $head = $head->next;
    }
    $right->next = null;
    $left->next = $right_head->next; //左侧尾节点拼接右侧投节点
    return $left_head->next;
}