<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/5/22
 * Time: 4:51 PM
 */


$tmp = array('2016-01-01'=>array(1),'2016-02-01'=>array(1),'2017-01-01'=>array(1),
    '2017-02-01'=>array(1),'2018-01-01'=>array(1),'2018-02-01'=>array(1));
//$new=array_slice($tmp,0,1);
//$new1=array_slice($tmp,-1,1);

$keys_arr = array_keys($tmp);
$year_arr = array();
foreach ($keys_arr as $val) {
    $year = date('Y',strtotime($val));
    if (!in_array($year,$year_arr)){
        $year_arr[] = $year;
    }
}

$return_arr = [];

foreach ($tmp as $key=>$val){
    $year = date('Y',strtotime($key));
    if(in_array($year,$year_arr)){
        $return_arr[] = $key;
        unset($year_arr[array_search($year,$year_arr)]);
    }else {
        $return_arr[] = date('m-d',strtotime($key));;
    }

}

print_r($return_arr);

