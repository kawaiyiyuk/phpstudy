<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/25
 * Time: 14:56
 */

require 'config.php';
//新增数据

$query = "INSERT INTO `gread` (`id`, `name`, `email`, `point`, `regdate`) VALUES (NULL, '大哥小', 'dagexiao@qq.com', '95', NOW());";
//修改数据
$query2 = "UPDATE `gread` SET `point`='99' WHERE (`id`='6')";

//删除数据
$query3 = "DELETE FROM `gread` WHERE `gread`.`id` = 12";

//显示数据
$query4 = "SELECT id,name,email,point FROM gread";

//$result = mysqli_query($coon,$query4);
   // mysqli_query($coon,$query3);

//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//print_r($row);


//while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
//    echo $row['id'].'----'.$row['name'].'----'.$row['email'];
//    echo '<br/>';
//}


if($result = mysqli_query($coon,$query4)) {
    while($obj = mysqli_fetch_object($result)) {
        printf("%s : %s",$obj -> name ,$obj -> email);
        echo '<br/>';
    }
    //释放结果合集
    mysqli_free_result($result);
}


mysqli_close($coon);