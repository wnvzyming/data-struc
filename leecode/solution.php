<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/10
 * Time: 6:24 PM
 */


function solution( &$return__arr = [] ,$arr = [] ,$n = 0 ,$k = 0) {

    if($k == 0){
        array_push($return__arr,$arr);
        return;
    }
    if($n < $k) return;

    for($i = $n ; $i >= 1 ; $i--) {
        $tem_arr = [];

        array_push($tem_arr,$i);
        //array_push($tem_arr,($i - 1));


        array_push($tem_arr,$arr);
        solution($return__arr,$tem_arr,$i-1,$k-1);

    }

}

function getData($n = 0 ,$k = 0 ) {

    $return__arr = [];
    $arr = [];
    solution($return__arr,$arr,$n,$k);

    return $return__arr;

}

$res = getData(4,2);

print_r($res);
