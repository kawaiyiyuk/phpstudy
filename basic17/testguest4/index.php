<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 14:12
 */
//定义一个常量
define('IN_TG',true);

//引入公共文件
//转换成硬路径 引用的速度更快

require dirname(__FILE__).'/includes/common.inc.php'; //转换成硬路径，速度更快

?>

<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./images/bitbug_favicon.ico">
    <link rel="stylesheet" href="./css/1/style.css">
    <link rel="stylesheet" href="./css/1/index.css">
    <title>多用户留言系统首页</title>
</head>
<body>
    <?php
        require ROOT_PATH.'includes/header.inc.php'
    ?>

    <div id="content " class="clearfix content-wrap">
        <div class="content">
            <div class="content-left f-left" >
                <div class="top">
                    <h2>新进会员</h2>
                </div>
                <div class="bottom">
                    <h2>最新图片</h2>
                </div>
            </div>

            <div class="content-right f-right">
                <h2>帖子列表</h2>
            </div>
        </div>

    </div>
    <?php
        require ROOT_PATH.'includes/footer.inc.php';
    ?>
</body>
</html>