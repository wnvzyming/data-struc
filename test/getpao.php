<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/9
 * Time: 3:16 PM
 */

function getpao($arr){
    $len = count($arr);
    for($i = 1 ; $i<$len;$i++){
        for($k=0;$k<$len-$i;$k++){
            if($arr[$k] > $arr[$k+1]){
                $tem = $arr[$k+1];
                $arr[$k+1] = $arr[$k];
                $arr[$k] = $tem;
            }
        }
    }
    return $arr;
}

$arr = [2,13,42,34,56,23,67,365,54,68,3];

print_r($arr);