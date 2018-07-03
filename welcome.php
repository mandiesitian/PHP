
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$_POST获取表单post信息</title>
</head>
<body>
<?php
session_start();

echo "欢迎".$_SESSION['user'];
echo "你的年龄是".$_POST["age"]."岁。";
?>
</body>
