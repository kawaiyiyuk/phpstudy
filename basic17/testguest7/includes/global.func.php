<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/28
 * Time: 15:24
 */


/**_runtime 获取执行耗时
 * @access public 表示函数对外开放
 * @return float 表示返回的是一个浮点型数字
 */
function _runtime () {
    //microtime() 函数 返回一个字段 前半部分代表毫秒部分，后半部分是时间戳
    //时间戳实际就是从1970.1.1到现在的秒数
    //所以两个相加的话就是包括毫秒的现在时间
    $_mtime = explode(' ',microtime());
    return  $_mtime[1]+ $_mtime[0];
}


?>