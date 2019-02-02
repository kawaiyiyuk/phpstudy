<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 14:12
 */
//防止恶意调用页面
if(!defined('IN_TG')) {
    exit('非法调用');
}
$_end_time = _runtime();
?>

<div id="footer">
    <p>本程序执行耗时为:<?php echo round( $_end_time - $_start_time,4);?>秒</p>
    <p>版权信息</p>
</div>
