<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/3/19
 * Time: 10:12 AM
 */

class sum
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums = [], $target = 0) {

        $return_arr = [];

        for ( $i = 0 ;$i < count($nums) ; $i++  ) {
            for ( $j = $i+1 ;  $j < count($nums) ; $j++  ) {
                if ( $nums[$i] + $nums[$j] == $target) {
                    $return_arr = [$i,$j];
                }
            }
        }
        return $return_arr;
    }

}

$nums = [ 11, 15, 7,1000,999,88,77,2,1];
$target = 9 ;
$sum = new sum();
$res = $sum->twoSum($nums,$target);

print_r($res);