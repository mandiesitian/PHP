<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 14:52
 */
include 'D:/phpStudy/WWW/config/auth.php';
session_start();

if(isset($_POST['user'])&&isset($_POST['passwd']))
{
    $user=$_POST['user'];
    $passwd=$_POST['passwd'];

    $passwd=md5($passwd);

    if($user!=$AUTH['user']||$passwd!=$AUTH['passwd']){
        echo '<strong><font color="red">用户名或密码错误 ！</font></strong>';
    }
    else{
        $_SESSION['user']=$user;
        header('location:index.php');
    }

}
?>
<html>
<head>
    <title>基于文本的简易BLOG</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div id="containor">
    <div id="header">
        <h1>我的BLOG</h1>
    </div>
    <div id="title">
        ---I LOVE PHP---
    </div>

    <div id="left">
        <div id="blog_entry">
        <div id="blog_title">用户登录</div>
            <div id="blog_body">

                <div id="blog_date"></div>
                <table border="0">
                    <form method="post" action="login.php">
                        <tr><td>用户名称：</td><td><input type="text" name="user" size="15"></td></tr>
                        <tr><td>用户密码：</td><td><input type="password" name="passwd" size="15"></td></tr>
                        <tr><td><input type="submit" value="登录"></td></tr>
                    </form>
                </table>
            </div>

        </div>
    </div>


    <div id="right">
        <div id="sidebar">
            <div id="menu_title">关于我</div>
            <div id="menu_body">爱好PHP</div>
        </div>
    </div>

    <div id="footer">
        CopyRight 2011
    </div>


</div>
</body>
</html>


