<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 13:01
 */

session_start();

$user=$_POST['user_name'];
$password=$_POST['password'];
if (!empty($user))
{
    $_SESSION['user']=$user;
}
echo $user;
echo '<br/>';
echo $password;
echo '<br/>';
echo '<a href="LX2.php">点击欢迎</a>';
?>