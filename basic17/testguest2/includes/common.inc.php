<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 14:23
 */


if(!defined('IN_TG')){
    exit('非法调用');
};

//转换硬路径
define('ROOT_PATH',substr(dirname(__FILE__),0,-8));

//拒绝低版本php
//PHP_VERSION php版本
    if(PHP_VERSION <= '5.1') {
        exit('PHP版本过低') ;
    }
?>