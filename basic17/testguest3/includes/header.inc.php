<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 14:06
 */

//防止恶意调用页面
if(!defined('IN_TG')) {
    exit('非法调用');
}
?>

<div id="header">
    <header class="clearfix">
        <h1><a href="index.php"><img src="images/logo1.jpg" alt=""></a></h1>
        <ul>
            <li>首页</li>
            <li>注册</li>
            <li>登录</li>
            <li>个人中心</li>
            <li>风格</li>
            <li>管理</li>
            <li>退出</li>
        </ul>
    </header>
</div>
