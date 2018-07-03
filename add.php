<?php
$ok=true;
if(isset($_POST['title'])&&isset($_POST['content']))
{
    $ok=true;
    $title=trim($_POST['title']);
    $content=$_POST['content'];
    $date=time();

    $blog_str=$title.'|'.$date.'|'.$content;

    $ym=date('Ym',time());
    $d=date('d',time());
    $time=date('His',time());

    $system_Path=$_SERVER['DOCUMENT_ROOT'];
    $folder=$system_Path.'/'.'content/'.$ym;
    $file=$d.'-'.$time.'.txt';
    $filename=$folder.'/'.$file;
    $entry=$ym.'-'.$d.'-'.$time;

    if(!file_exists($folder)){
        mkdir($folder);
    }


    $fp=fopen($filename,'w');

    if($fp){
        flock($fp,LOCK_EX);
        $result=fwrite($fp,$blog_str);
        flock($fp,LOCK_UN);
        fclose($fp);

    }

    if(strlen($result)>0){
        $msg='日志添加成功，<a href="post.php?entry='.$entry.'">查看该日志文章</a>';
        echo $msg;
    }




}



?>


<html>
<head>
    <title>基于文本的建议BLOG</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
</html>

<body>
<div id="containor">
    <div id="header">
        <h1>我的BOLG</h1>
    </div>
    <div id="title">
        ---I have a dream---
    </div>

    <div id="left">
        <div id="blog_entry">
            <div id="blog_title">添加一篇新日志</div>
            <div id="blog_body">
                <div id="blog_date"></div>
                <table border="0">
                    <form method="post" action="add.php">
                        <tr><td>日志标题</td></tr>
                        <tr><td><input type="text" name="title" size="50"></td></tr>
                        <tr><td>日志内容</td></tr>
                        <tr><td><textarea name="content" cols="49" rows="10"></textarea> </td></tr>
                        <tr><td><input type="submit" value="提交"></td></tr>
                    </form>
                </table>
            </div>
        </div>
    </div>

    <div id="right">
        <div id="sidebar">
            <div id="menu_title">关于我</div>
            <div id="menu_body">我是PHP爱好者</div>
        </div>
    </div>

    <div id="footer">
        CopyRight 2011
    </div>

</div>
</body>