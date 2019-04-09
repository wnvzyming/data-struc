<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/9
 * Time: 11:38 AM
 */

//100元红包，发给10个人，每个人6-12元，用程序实现。
$cash = 40;
$user_arr = [6,6,6,6,6,6,6,6,6,6];
while($cash>0){
    $user_id = rand(0, 9);
    if($user_arr[$user_id]<12){
        $user_arr[$user_id]++;
        $cash--;
    }
};


print_r($user_arr);die;
print_r($user_arr,array_sum($user_arr));die;