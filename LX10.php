<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 10:18
 */
$user=$_POST['user_name'];
$password=$_POST['password'];

setcookie('user',$user);
setcookie('password',$password);


echo $_COOKIE['user'];
echo '<br/>';
echo $_COOKIE['password'];
?>