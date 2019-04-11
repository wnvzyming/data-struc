<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/9
 * Time: 3:19 PM
 */


function get_hash_table($table,$userid) {
    $str = md5($userid);
    if($str<0){
        $hash = "0".substr(abs($str), 0, 1);
    }else{
        $hash = substr($str, 0, 2);
    }
    return $table."_".$hash;
}
echo get_hash_table('message','user18991');     //结果为message_10
echo get_hash_table('message','user34523');    //结果为message_13