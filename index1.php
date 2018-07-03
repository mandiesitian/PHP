<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 12:38
 */
session_start();

$_SESSION['user']="user_index1";

echo $_SESSION['user'];
?>