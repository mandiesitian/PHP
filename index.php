<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 15:36
 */
$login=false;
session_start();

if(!empty($_SESSION['user'])&&$_SESSION['user']='admin'){
    $login=true;
}
    $file_array=array();
    $folder_array=array();

    $dir=$_SERVER['DOCUMENT_ROOT'].'/'.'content';
    $dh=opendir($dir);

    if($dh){
        $filename=readdir($dh);

        while($filename){
            if($filename!='.'&&$filename!='..'){

                $folder_name=$filename;
                array_push($folder_array,$folder_name);
            }
            $filename=readdir($dh);

        }
    }
    closedir($dh);
    rsort($folder_array);    //数组排序 从小到大

    $post_data=array();

    foreach ($folder_array as $folder){
        $dh=opendir($dir.'/'.$folder);
        while (($filename=readdir($dh))!=false){
            if(is_file($dir.'/'.$folder.'/'.$filename)){
                $file=$filename;
                $file_name=$dir.'/'.$folder.'/'.$file;

                if(file_exists($file_name)){
                    $fp=fopen($file_name,'r');
                    if($fp){
                        flock($fp,LOCK_SH);
                        $result=fread($fp,filesize($file_name));
                    }
                    flock($fp,LOCK_UN);
                    fclose($fp);
                }
                $tmp_data=array();
                $content_array=explode('|',$result);

                $tmp_data['subject']=$content_array[0];
                $tmp_data['date']=date('Y-m-d H:i:s',$content_array[1] );
                $tmp_data['content']=$content_array[2];
                $file=substr($file,0,9);
                $tmp_data['filename']=$folder.'-'.$file;
                array_push($post_data,$tmp_data);

            }
        }

    }
//    echo '<pre>';
//    print_r($post_data);

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
        ---I Have a dream--
    </div>

    <div id="left">
        <?php
        foreach ($post_data as $post){
        ?>
        <div id="blog_entry">
            <div id="blog_title"><?php echo $post['subject'];?></div>
            <div id="blog_body">
                <div id="blog_date"><?php echo $post['date'];?></div>
                <?php echo $post['content'];?>
                <div>
                    <?php
                    if($login)
                    {
                        echo '<a href="edit.php?entry='.$post['filename'].'">编辑</a>';
//                        echo '<a href="delete.php?entry='.post['filename'].'">删除</a>';
                    }
                    ?>
                </div>
            </div>

        </div>
        <?php }?>

    </div>




</div>

</body>

</html>
