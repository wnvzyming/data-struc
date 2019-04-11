
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/11
 * Time: 10:47 AM
 * 输入: 38
 * 输出: 2
 * 解释: 各位相加的过程为：3 + 8 = 11, 1 + 1 = 2。 由于 2 是一位数，所以返回 2。
 * 你可以不使用循环或者递归，且在 O(1) 时间复杂度内解决这个问题吗？
 * 执行用时 : 8 ms, 在Add Digits的Go提交中击败了96.55% 的用户
 * 内存消耗 : 2.2 MB, 在Add Digits的Go提交中击败了59.26% 的用户
 */


package main

import "fmt"

func addDigits( num int)  int {

	if num > 9 {
		num = num % 9;
		if num == 0 {
			return 9
		}
	}

	return num
}

func main()  {

	fmt.Print(addDigits(38))

}



