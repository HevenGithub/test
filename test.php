<?php
/**
 * Created by PhpStorm.
 * User: 陈文焕是不敢打开房间的解放军的发表都分开
 * Date: 2021-03-26
 * Time: 20:30
 */

// 1.php 用数组的形式输出字符串
//$str = '1234567890';
//$res = '';
//$i = 0;
//while(isset($str[$i]) && $str[$i] != null) {
//    $res = $str[$i++].$res;
//}
//echo $res;


// 2.判断为空的几种情况
// 如果一个变量不存在时，打印该值为null，如：var_dump($b);
// isset, 判断变量是否设置，及解析内容为null时，为false，其他情况为true
// empty，判断变量是否为空，"0",0,"",null,[] 为 true，其他情况为false


// 3.5*4*3*2*1
//function F($n){
//    if($n==0){
//        return 1;
//    }else{
//        return $n* F($n-1);
//    }
//}
//var_dump(F(5));


// 4.将字符长fang-zhi-gang 转化为驼峰法的形式：FangZhiGang
//ps:explode:把字符串打散为数组, implode:把数组元素组合为一个字符串
//ps:ucwords:把每个单词的首字符转换为大写
//function Fun($str){
//    $arr1 = explode('_',$str);
//    $str = implode(' ',$arr1);
//    return ucwords($str);
//}
//var_dump(Fun("fang-zhi-gang")); //FangZhiGang

//5.include 和 request 的区别？ include_once 和 request_once 的区别？

$GLOBALS
function t1(){
    global $var1;
    $var1=2;
    unset($var1);
}
function t2(){
    $GLOBALS['var1']=3;
    unset($GLOBALS['var1']);
}
$var1=1;
t1();
var_dump($var1);
t2();
var_dump($var1);
