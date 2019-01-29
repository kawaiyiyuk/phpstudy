<?php
/**
 * Created by PhpStorm.
 * User: 39959
 * Date: 2019/1/16
 * Time: 15:43
 */
//二维数组
//$products = array(
//    array('苹果',6,28.8),
//    array('香蕉',5,18.8),
//    array('橘子',16,8.8),
//);
////echo count($products);
//for($i=0;$i<count($products);$i++) {
//    for($j = 0;$j<count($products[$i]); $j++) {
//        echo $products[$i][$j].'<br/>';
//    }
//
//}


$products = array(
    array('产品名' => '苹果','数量' => 6, '价格' => 28.8),
    array('产品名' => '香蕉','数量' => 3, '价格' => 18.8),
    array('产品名' => '橘子','数量' => 7, '价格' => 8.8),
);

for ($i=0;$i<count($products);$i++) {
    foreach ($products[$i] as $item) {
        echo $item.'|';
    }
    echo '<br/>';
}