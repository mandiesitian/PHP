<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/1 0001
 * Time: 18:31
 */
$user_name=$_POST['user_name'];
$gender=$_POST['gender'];
$hobby=$_POST['hobby'][0].'、'.$_POST['hobby'][1];
$prof=$_POST['occpy'];

if($user_name=="")
{
    echo '请返回输入用户名！';
    exit;
}
if($gender=="")
{
    echo '请返回输入用户名！';
    exit;
}
if($hobby=="")
{
    echo '请返回输入用户名！';
    exit;
}

print_r($_POST);
echo '<br/>';

echo '姓名:'.$user_name.'<br/>';
echo '性别：'.$gender.'<br/>';
echo '爱好：'.$hobby.'<br/>';
echo '职业：'.$prof.'<br/>';



?>