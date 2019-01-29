<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/12
 * Time: 14:09
 */
//$_POST['username']; 将上一张表单获取的value值获取到
$username = $_GET['username'];
//变量与字符串之间使用.符号进行连接
echo '这个学生是：'.$username;