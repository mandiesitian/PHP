<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 13:08
 */
session_start();
echo '欢迎回来'.$_SESSION['user'];
?>