<?php

$head = new ListNode(3);
$head->next = ($node2 = new ListNode(2));
$node2->next = ($node3 = new ListNode(0));
$node3->next = ($node4 = new ListNode(-4));
$node4->next = $node2;

class Problem6 {

    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle(ListNode $head) : bool
	{
        return true;
    }
}

$problem = new Problem6;
$problem->hasCycle($head);
var_dump($head);
 
class ListNode {
 	public $val = 0;
 	public $next = null;
 	function __construct($val) { $this->val = $val; }
}