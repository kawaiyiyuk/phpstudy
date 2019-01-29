<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/25
 * Time: 14:00
 */

//第一步链接到数据库  一般mysql端口为3306
//服务器地址，用户名，密码
//$host = 'localhost';
//$user = 'root';
//$password = '82535324';

//最好是使用常量更为安全
//选择指定的数据库
//有一点需要注意的是 mysqli_connect 可以直接打开指定的数据库
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','82535324');
define('DB_NAME','school');
$coon = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if(mysqli_connect_errno($coon)) {
    echo '链接mysql失败'.mysqli_connect_error();
}

// 修改数据库为 "test"
//mysqli_select_db($con,"test");


//执行针对数据库的查询：
$query = "SELECT * FROM gread";
$result = mysqli_query($coon,$query);


$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
print_r($row);



// 释放结果集
mysqli_free_result($result);

//最后一步 关闭数据库
mysqli_close($coon);

