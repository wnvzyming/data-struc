

//执行用时 : 8 ms, 在Maximum Depth of Binary Tree的Go提交中击败了99.11% 的用户
//内存消耗 : 4.6 MB, 在Maximum Depth of Binary Tree的Go提交中击败了12.17% 的用户

package main

import (
	"fmt"
	"math"
)

type NodeTree struct {
	Value int
	Left,Right *NodeTree
}


func maxDepth(node *NodeTree) int {

	if node == nil {
		return 0
	}

	left := maxDepth(node.Left) + 1
	right := maxDepth(node.Right) + 1

	return int(math.Max(float64(left),float64(right)))


}



func main()  {

	var node1 NodeTree
	node1.Value = 1
	node1.Left = &NodeTree{1,nil,nil}
	node1.Right = &NodeTree{2,&NodeTree{3,nil,nil},&NodeTree{4,nil,nil}}

	fmt.Print(maxDepth(&node1))

}

