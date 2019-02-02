<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 16:22
 */

define('IN_TG',true);
define('SCRIPT','reg');
require dirname(__FILE__).'/includes/common.inc.php';
?>

<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        require ROOT_PATH.'includes/title.inc.php'
    ?>
    <script src="js/face.js"></script>
    <title>注册</title>
</head>
<body>
<?php
    require ROOT_PATH.'includes/header.inc.php';
?>
<div class="register_wrap">
    <div class="register">
        <h2>会员注册</h2>
        <form action="post.php" method="post" class="form">
            <h3>请认真填写以下内容</h3>
            <dl>
                <dd><label for="usename">用户名:</label><input type="text" name="usename" class="text"></dd>
                <dd><label for="password">密码:</label><input type="password" name="password" class="text"></dd>
                <dd><label for="notpassword">确认密码:</label><input type="password" name="notpassword" class="text"></dd>
                <dd><label for="passt">密码提示:</label><input type="text" name="passt" class="text"></dd>
                <dd><label for="passd">密码回答:</label><input type="text" name="passd" class="text"></dd>
                <dd><label for="sex">性别:</label><input type="radio" name="sex" class="radio" value="nan" checked>男
                    <input type="radio" name="sex" class="radio" value="nv">女
                </dd>
                <dd class="face">
                    <img src="./face/m01.gif" alt="" id="faceimg">
                </dd>
                <dd><label for="email">电子邮箱:</label><input type="text" name="email" class="text"></dd>
                <dd><label for="qq">QQ:</label><input type="text" name="qq" class="text"></dd>
                <dd><label for="url">主页地址:</label><input type="text" name="url" class="text"></dd>
                <dd><label for="yzm">验证码:</label><input type="text" name="yzm" class="text"></dd>
                <dd><button type="submit">注册</button></dd>

            </dl>
        </form>
    </div>
</div>


<?php
    require ROOT_PATH.'includes/footer.inc.php'
?>
</body>
</html>
