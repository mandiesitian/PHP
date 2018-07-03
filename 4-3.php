<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 14:17
 */
$line=array(1,2,3,4,5,6,7,8,9);

function novar(){
    global $line;
    echo '无参数遍历外部数组';

    foreach ($line as $value){
        echo "$value-";
    }

    echo '<br/>';

}


novar();

function usevar($arr){
    echo '有参数遍历数组';

    foreach ($arr as $value){
        echo "$value-";
    }

    echo '<br/>';

}


usevar($line);
?>