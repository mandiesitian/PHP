<?php
session_start();

$user=$_POST['user_name'];
echo $user;
if(!empty($user))
{
    $_SESSION['user']=$user;  //链接  使用
    $welcome='您好'.$user.'请输入以下信息后提交。';
    echo '<br/>';
}
try
{
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $bload=$_POST['blood_type'];

}
catch (Exception $e)
{
    print $e->getMessage();
    exit;
}


if(!empty($gender)&&!empty($age)&&!empty($bload))
{
    echo '性别：'.$gender.'<br/>';
    echo '年龄：'.$age.'<br/>';
    echo '血型：'.$bload.'<br/>';

}
else
{
?>

<html>
<head>
    <title>3-9用户信息输入</title>
</head>

<body>
<?php

echo $welcome;
?>

<form name="info" action="3-10.php" method="post">
    <table border="0">
        <tr>
            <td>性别：</td>
            <td><input name="'gender" type="radio" value="male" >男 <input name="gender" type="radio" value="female">女</td>
        </tr>

        <tr>
            <td>年龄：</td>
            <td><input name="age" type="input" size="3"></td>
        </tr>
        <tr>
            <td>血型：</td>
            <td>
                <select name="blood_type">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
                    <option value="other">other</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="提交"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
}
?>
