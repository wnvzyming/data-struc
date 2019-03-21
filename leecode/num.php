<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/3/19
 * Time: 10:48 AM
 */

class num
{

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {

        $tagVal = [];
        $tagVal['I'] = 1;
        $tagVal['V'] = 5;
        $tagVal['X'] = 10;
        $tagVal['C'] = 100;
        $tagVal['M'] = 1000;
        $tagVal['L'] = 50;
        $tagVal['D'] = 500;

        $num = '';
        for ($i = 0 ; $i++ ; $i < strlen($s)) {

            $char = substr($s ,$i,1);

            $num .= $tagVal[$char];

        }

        return $num;
    }


}

$num = new num();

echo $num->romanToInt('MCMXCIV');