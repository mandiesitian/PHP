<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 14:32
 */
function showString(){
    echo 'hellow world';
}

function showInt(){
    echo '123';
}

$action='showString';
$action();

echo '<br/>';
$action='showInt';
$action();

?>