<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 14:26
 */
function listArrary($array){
    foreach ($array as $value){
        echo $value;
    }
}

function returnString(){
    return 'hellow world';
}

echo returnString();
echo '<br/>';

function returnArray(){
    $line=array(1,2,3,4,5);
    return $line;
}
listArrary(returnArray());


?>