<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/11
 * Time: 10:47 AM
 * 输入: 38
 * 输出: 2
 * 解释: 各位相加的过程为：3 + 8 = 11, 1 + 1 = 2。 由于 2 是一位数，所以返回 2。
 * 你可以不使用循环或者递归，且在 O(1) 时间复杂度内解决这个问题吗？
 * 内存消耗 : 14.7 MB, 在Add Digits的PHP提交中击败了51.85% 的用户
 * 执行用时 : 84 ms, 在Add Digits的PHP提交中击败了22.22% 的用户
 */


/**
 * f(x*10+y)=f(x*9+x+y)=f(x+y), 成立当f(x)= x%9
 * @param Integer $num
 * @return Integer
 */
function addDigits($num) {

    if($num > 9) {
        $num = $num % 9;
        if ($num == 0)return 9;
    }
    return $num;
}

echo addDigits(100);


