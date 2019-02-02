<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/31
 * Time: 11:30
 */

if(!defined('IN_TG')){
    exit('非法调用');
};
//防止非html调用
if(!defined('SCRIPT')){
    exit('非html页面无法调用');
}

?>
<link rel="shortcut icon" href="./images/bitbug_favicon.ico">
<link rel="stylesheet" href="./css/1/style.css">
<link rel="stylesheet" href="./css/1/<?php echo SCRIPT ?>.css">

