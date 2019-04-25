package main

import "fmt"

/**
 * Definition for a binary tree node.
 * type TreeNode struct {
 *     Val int
 *     Left *TreeNode
 *     Right *TreeNode
 * }
 * 节点的左子树只包含小于当前节点的数。
 * 节点的右子树只包含大于当前节点的数。
 * 所有左子树和右子树自身必须也是二叉搜索树。
 */


type TreeNode struct {
	Val int
	Left *TreeNode
	Right *TreeNode
}

var last int

func isValidBST(root *TreeNode) bool {

	if root == nil {
		return true
	}

	if isValidBST(root.Left) {
		if root.Val > last {
			last = root.Val
			isValidBST(root.Right)
		}
	}

	return false

}

func main()  {

	fmt.Print(isValidBST(&TreeNode{0,nil,nil}))

}
