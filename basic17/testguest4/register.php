<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 16:22
 */

define('IN_TG',true);
require dirname(__FILE__).'/includes/common.inc.php';
?>

<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/1/style.css">
    <link rel="stylesheet" href="./css/1/reg.css">
    <title>注册</title>
</head>
<body>
<?php
    require ROOT_PATH.'includes/header.inc.php';
?>
<div class="register_wrap">
    <div class="register">
        <h2>会员注册</h2>
        <form action="post.php" method="post">
            <h3>请认真填写以下内容</h3>
            <ul>
                <li>用户名 <input type="text" name="usename" class="text"></li>
                <li>密码 <input type="password" name="password" class="text"></li>
                <li>确认密码 <input type="password" name="notpassword" class="text"></li>
                <li>密码提示 <input type="text" name="passt" class="text"></li>
                <li>密码回答 <input type="text" name="passd" class="text"></li>
                <li>性别 <input type="radio" name="sex" class="radio" value="nan" checked>男
                    <input type="radio" name="sex" class="radio" value="nv">女
                </li>
            </ul>
        </form>
    </div>
</div>


<?php
    require ROOT_PATH.'includes/footer.inc.php'
?>
</body>
</html>
