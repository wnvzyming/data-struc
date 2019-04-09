<?php
/**
 * 快排序
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/9
 * Time: 2:58 PM
 */

$a = [2,13,42,34,56,23,67,365,54,68,3];

function quick_sort($a)
{
    if (count($a) <= 1) return $a;
    $middle = $a[0];

    $left = $right = [];

    // 循环比较
    for ($i=1; $i < count($a); $i++) {
        if ($middle < $a[$i]) {
            $right[] = $a[$i];
        } else {
            $left[] = $a[$i];
        }
    }


    // 递归排序划分好的2边
    $left = quick_sort($left);
    $right = quick_sort($right);

    // 合并排序后的数据，别忘了合并中间值
    return array_merge($left, array($middle), $right);
}

print_r(quick_sort($a));