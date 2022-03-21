<?php
// basename() 函数返回路径中的文件名部分。
// strpos() 查询函数第一次出现的位置，0开始，不存在返回false

function getExt($url)
{
    $arr = basename($url);
    $str1 = strpos($arr, '.');
    $str2 = strpos($arr, '?');

    if ($str2 === false) {
        return substr($arr, $str1);
    } else {
        return substr($arr, $str1, $str2-$str1);
    }
}

$url = "http://www.startphp.cn/abc/de/fg.php?id=1";
echo getExt($url);