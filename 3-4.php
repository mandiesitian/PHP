<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/1 0001
 * Time: 19:13
 */
session_start();

$_SESSION['user']='KingKong';
$_SESSION['password']='this is session';

echo 'this page has some session var';
echo '<br/><a href="3-5.php">进入3-5.php</a>查看这些变量 '

?>