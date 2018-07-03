<html>

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 9:38
 */
setcookie('testcookie','i love php');

if($_COOKIE['testcookie']!='i love php')
{
    echo '请打开浏览器的cookie支持';
    exit();
}
echo 'cookie is value:'.$_COOKIE['testcookie'];
//setcookie('mycookie[one]','cookieone');
//setcookie('mycookie[two]','cookietwo');
//setcookie('mycookie[three]','cookiethree');
//echo '<br/>';
//
//foreach ($_COOKIE['mycookie'] as  $name =>$value)
//{
//    echo $name.':'.$value.'<br/>';  //只能用=>
//}


?>