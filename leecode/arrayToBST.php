<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/16
 * Time: 3:00 PM
 */



class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value) {
        $this->val = $value;
    }
}



class Solution {

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {

        return $this->buildTree($nums,0,count($nums)-1);

    }

    function buildTree($nums,$l,$r){
        if ($l > $r) {
            return null;
        }
        $mid = $l + ($r - $l) / 2;
        $treenode = new TreeNode($nums[$mid]);
        $treenode->left  =  $this->buildTree($nums,0,$mid-1);
        $treenode->right = $this->buildTree($nums,$mid+1,$r);

        return $treenode;
    }

}

$Solution = new Solution();

print_r($Solution->sortedArrayToBST([-10,-5,0,3,9]));