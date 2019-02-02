<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 16:22
 */

define('IN_TG',true);
define('SCRIPT','face');
//引入公共文件
//转换成硬路径 引用的速度更快
require dirname(__FILE__).'/includes/common.inc.php';
?>
<!doctype html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php require ROOT_PATH.'includes/title.inc.php'?>
    <script src="js/opener.js"></script>
    <title>选择头像</title>
</head>
<body>
    <div id="imgChose">
        <h3>请选择头像</h3>
        <dl>
            <?php foreach (range(1,9) as $num) {?>
                <dd><img src="./face/m0<?php echo $num?>.gif" title="头像<?php echo $num?>" alt="./face/m0<?php echo $num?>.gif" ></dd>
            <?php }?>
        </dl>

        <dl>
            <?php foreach (range(10,60) as $num) {?>
                <dd><img src="./face/m<?php echo $num?>.gif" title="头像<?php echo $num?>" alt="./face/m<?php echo $num?>.gif" ></dd>
            <?php }?>

        </dl>
    </div>

</body>
</html>
