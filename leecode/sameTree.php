<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/11
 * Time: 3:03 PM
 */


class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($value) {
         $this->val = $value;
     }
}



function isSameTree(&$node1, &$node2){

    if($node1 == null && $node2 == null){

        return true;
    }

    if(($node1 != null && $node2 != null) && ($node1->val == $node2->val)) {
        return isSameTree($node1->left,$node2->left) && isSameTree($node1->right,$node2->right);
    }

    return false;


}


$node1 = new TreeNode(3);
$node1->left = new TreeNode(1);
$node1->right = new TreeNode(2);

$node2 = new TreeNode(3);
$node2->left = new TreeNode(3);
$node2->right = new TreeNode(2);

var_dump(isSameTree($node1,$node2));