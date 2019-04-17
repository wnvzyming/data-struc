package main

import "fmt"

type ListNode struct {
	Val int
	Next *ListNode
}

func deleteNode(node *ListNode) {
	node.Val = node.Next.Val
	node.Next = node.Next.Next

}

func main() {
	node := new(ListNode)
	node.Val = 4
	node.Next = new(ListNode)
	node.Next.Val = 5
	node.Next.Next = new(ListNode)
	node.Next.Next.Val = 1
	node.Next.Next.Next = new(ListNode)
	node.Next.Next.Next.Val = 9

	cur := node
	for {
		fmt.Println(cur.Val)
		if cur.Next == nil {
			break
		}
		cur = cur.Next
	}
	deleteNode(node.Next.Next)
	fmt.Println("+++++++++++++++++++")
	cur = node
	for {
		fmt.Println(cur.Val)
		if cur.Next == nil {
			break
		}
		cur = cur.Next
	}
}
