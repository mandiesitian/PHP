<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/1 0001
 * Time: 19:17
 */

session_start();

$user_name=$_SESSION['user'];
$password=$_SESSION['password'];

echo $user_name;
echo '<br/>';
echo $password;

echo '<br/>';
echo '返回3-4请点击：<a href="3-4.php">返回</a>';
?>