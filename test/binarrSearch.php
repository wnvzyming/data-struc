<?php
/**
 * 二分查找
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/9
 * Time: 2:20 PM
 */

function binarrSearch($array = [],$target){

    $left = 0;
    $right = count($array) - 1;
    while($left <= $right){
        $mid = intval(floor($left + $right) / 2);

        if($array[$mid] == $target) return $mid;
        if($array[$mid] < $target) $left = $mid + 1;
        if($array[$mid] > $target) $right = $mid - 1;
    }

    return false;

}


echo binarrSearch([1,2,3,4,5,6,7,8,9,10],10);

