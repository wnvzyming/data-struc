<?php
/**
 * Created by PhpStorm.
 * User: wnvzyming
 * Date: 2019/4/9
 * Time: 3:18 PM
 */

function getdirglo( $dir ){
    static $arr = array();
    if(is_dir($dir)){
        $hadle = @opendir($dir);
        while($file=readdir($hadle) )
        {
            if(!in_array($file,array('.','..')) )
            {
                $dirr = $dir.$file."/";
                array_push($arr,$dirr);
                if(is_dir($dirr))
                {
                    getdirglo( $dirr);
                }
            }
        }
    }
    return $arr;
}
$arr = array();
$arr = getdirglo($dir);
var_dump($arr);